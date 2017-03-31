<?php

namespace Helldar\Vk\Jobs;

use Helldar\Vk\Models\VkRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessVkQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 10;

    /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    public $timeout = 30;

    /**
     * To call a VK API method you need to make POST or GET request to the specified URL using HTTPS protocol.
     *
     * @see https://vk.com/dev/api_requests
     *
     * @var string
     */
    private $api_url = 'https://api.vk.com/method/%s?';

    /**
     * @var VkRequest
     */
    protected $vkRequest;

    /**
     * Create a new job instance.
     *
     * @param VkRequest $vkRequest
     */
    public function __construct(VkRequest $vkRequest)
    {
        $this->vkRequest = $vkRequest;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $url = sprintf($this->api_url, $this->vkRequest->method);

            $client   = new \GuzzleHttp\Client();
            $response = $client->request('POST', $url, array(
                'form_params' => json_decode($this->vkRequest->request),
            ));

            if ($this->vkRequest->errors <= (int) config('vk.max_errors', 10) && $this->responseIsError($response)) {
                dispatch(new ProcessVkQueue($this->vkRequest));

                return;
            }

            $this->vkRequest->response   = $response->getBody();
            $this->vkRequest->is_success = true;
        } catch (\Exception $e) {
            $this->vkRequest->response = json_encode(array(
                'code' => $e->getCode(),
                'msg'  => $e->getMessage(),
            ));
        } finally {
            $this->vkRequest->save();
        }
    }

    /**
     * Check for error response.
     *
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-31
     *
     * @param $response
     *
     * @return bool
     */
    private function responseIsError($response)
    {
        $response = json_decode($response->getBody());

        if (isset($response->error)) {
            $this->vkRequest->errors++;
            $this->vkRequest->save();

            return true;
        }

        return false;
    }
}

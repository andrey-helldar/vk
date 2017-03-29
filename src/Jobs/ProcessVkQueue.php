<?php

namespace Helldar\Vk\Jobs;

use Helldar\Vk\Models\VkRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

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
    public $timeout = 120;

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

            $this->vkRequest->response = $response->getBody();
        } catch (\Exception $e) {
            $this->vkRequest->response = json_encode(array(
                'code' => $e->getCode(),
                'msg'  => $e->getMessage(),
            ));
        } finally {
            $this->vkRequest->save();
        }
    }
}

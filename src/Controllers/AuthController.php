<?php

namespace Helldar\Vk\Controllers;

use Helldar\Vk\Models\VkUser;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AuthController
{
    /**
     * @var string
     */
    private $url_auth = 'https://oauth.vk.com/authorize';

    /**
     * @var string
     */
    private $url_access_token = 'https://oauth.vk.com/access_token';

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     * @return mixed
     */
    public function auth()
    {
        return redirect()->to(str_finish($this->url_auth, '?').http_build_query([
                'client_id'     => env('VK_CLIENT_ID'),
                'redirect_uri'  => route('vk::auth'),
                'display'       => config('vk.display'),
                'response_type' => 'code',
                'scope'         => implode(',', config('vk.scope', [])),
                'v'             => config('vk.version', 5.63),
            ]));
    }

    public function getAccessToken(Request $request)
    {
        try {
            $client   = new \GuzzleHttp\Client();
            $response = $client->request('POST', $this->url_access_token, [
                'form_params' => [
                    'client_id'     => env('VK_CLIENT_ID'),
                    'client_secret' => env('VK_CLIENT_SECRET'),
                    'secret_key'    => env('VK_SECRET_KEY'),
                    'redirect_uri'  => route('vk::auth'),
                    'code'          => $request->code,
                ],
            ]);

            $data = collect(json_decode($response->getBody()));

            return $this->saveToken($data);
        } catch(\Exception $e) {
            return [
                'code' => $e->getCode(),
                'msg'  => $e->getMessage(),
            ];
        }
    }

    /**
     * @author Andrey Helldar <helldar@ai-rus.com>
     *
     * @since  2017-03-28
     *
     * @param $data
     *
     * @return mixed
     */
    private function saveToken($data)
    {
        $validator = \Validator::make($data->all(), [
            'access_token' => 'required|string|max:255',
            'expires_in'   => 'numeric',
            'user_id'      => 'numeric',
            'email'        => 'email',
        ]);

        if($validator->fails()) {
            return redirect()->to(config('vk.redirect_error', '/'));
        }

        $item = VkUser::withTrashed()->firstOrNew([
            'vk_user_id' => $data->get('user_id'),
        ]);

        $item->access_token = $data->get('access_token');
        $item->content      = json_encode($data->all());
        $item->expired_at   = $data->get('expires_in') ? Carbon::now()->addSeconds($data->get('expires_in')) : Carbon::now()->addYears(10);
        $item->deleted_at   = null;
        $item->save();

        return redirect()->to(config('vk.redirect_success', '/'));
    }
}
<?php

namespace App\Http\Controllers;

require 'vendor/autoload.php';

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class KahoinfoController extends Controller
{
    //
    protected $format = 'json';

    public function action_index()
    {
        $client = new Client([
            'base_uri' => 'http://zipcloud.ibsnet.co.jp/api/',
        ]);

        $method = 'GET';
        $uri = 'search?zipcode=131-0045';   // スカイツリーの郵便番号
        $options = [];
        $response = $client->request($method, $uri, $options);

        $list = json_decode($response->getBody()->getContents(), true);

        return $this->response($list);
    }
}



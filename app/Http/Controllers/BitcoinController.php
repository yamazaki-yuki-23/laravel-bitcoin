<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BitcoinController extends Controller
{
    public function index()
    {
        $client = new Client();
        $method = "GET";
        $data = []; // 各取引所で取得したデータを格納する

        # bitflyerで取得
        $url = "https://api.bitflyer.jp/v1/ticker?product_code=BTC_JPY";
        $response = $client->request("GET", $url);
        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $data['bitflyer'] = $posts;

        # Zaifで取得
        $url = "https://api.zaif.jp/api/1/ticker/btc_jpy";
        $response = $client->request("GET", $url);
        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $data['Zaif'] = $posts;

        # coincheckで取得
        $url = "https://coincheck.com/api/ticker";
        $response = $client->request("GET", $url);
        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $data['coincheck'] = $posts;
        
        return view('bitcoin.index', compact('data'));
    }
}

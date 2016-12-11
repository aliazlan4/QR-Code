<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QRCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addQRCode(Request $request)
    {
        $shortcode = $this->incrementalHash();
        $type = 'dynamic';
        $url = $request->input('url');
        $youtube = $request->input('youtube');

        $id = DB::table('qr-codes')->insertGetId(
            ['shortcode' => $shortcode, 'type' => $type, 'url' => $url, 'youtube' => $youtube]
        );
        return redirect("showQRCode/" . $shortcode);
    }

    public function showQRCode($shortcode)
    {
        $data = DB::table('qr-codes')->where('shortcode', $shortcode)->first();

        if($data->type == 'dynamic'){
            return view('showQRCode', ['shortcode' => $data->shortcode, 'url' => $data->url, 'youtube' => $data->youtube, 'qr_code_url' => url('/') . '/c/' . $shortcode]);
        }

        return "";
    }

    public function openQRCode($shortcode)
    {
        $data = DB::table('qr-codes')->where('shortcode', $shortcode)->first();

        if($data->type == 'dynamic'){
            return view('openQRCode', ['url' => $data->url, 'youtube' => $data->youtube]);
        }

        else {
            return redirect($data->url);
        }
    }

    private function incrementalHash($len = 5){
        $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $base = strlen($charset);
        $result = '';

        $now = explode(' ', microtime())[1];
        while ($now >= $base){
            $i = $now % $base;
            $result = $charset[$i] . $result;
            $now /= $base;
        }
        return substr($result, -5);
    }
}

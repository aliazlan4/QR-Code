<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addQRCode(Request $request)
    {
        $url = $request->input('url');
        $youtube = $youtube->input('url');
        return $url;
        //return view('home');
    }
}

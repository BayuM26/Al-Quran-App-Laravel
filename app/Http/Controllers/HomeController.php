<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }    

    public function index(){

        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => 'https://al-quran-8d642.firebaseio.com/data.json?print=pretty',
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $result = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($result);

        return view('HU',[
            'data' => $data,
            'title' => 'Halaman Utama'
        ]);
    }

    public function tentang(){
        return view('tentang',[
            'title' => 'Tentang',
        ]);
    }
}

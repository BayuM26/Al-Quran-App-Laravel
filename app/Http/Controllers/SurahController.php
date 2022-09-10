<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurahController extends Controller
{
    public function index($surah,$id){
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => 'https://al-quran-8d642.firebaseio.com/surat/'.$id.'.json?print=pretty',
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $result = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($result);
        
        return view('surah',[
            'title' => $surah,
            'data' => $data
        ]);
    }
}

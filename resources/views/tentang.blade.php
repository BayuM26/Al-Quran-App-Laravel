@extends('layouts.tempat')
@section('content')
    <style>
        i{
            font-size:30px;
        }

        .tentang{
            margin-top:100px;
            min-height: 700px;
        }

        p{
            margin-left: 100px
        }

        img{
            width:25%;
            height:25%;
            margin-bottom: 100px;
        }
    </style>
    <div class="tentang">
        <center>
            <img src="../lib/img/l.png" alt="">
        </center>
        <b>
            <p>NAMA : BAYU MAULANA</p>
            <p><i class="fa-brands fa-github"></i> : https://github.com/BayuM26?tab=repositories</p>
            <p><i class="fa-brands fa-linkedin"></i> : linkedin.com/in/bayumaulana26</p>
            <p><i class="fa-brands fa-instagram"></i> : @the_b26_</p>
            <p>SUMBER API : https://github.com/bachors/Al-Quran-ID-API</p>
        </b>
    </div>
@endsection
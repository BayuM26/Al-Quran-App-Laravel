@extends('layouts.tempat')
@section('content')
    <style>
        .ayat{
            font-size: 32px;
        }

        .back{
            margin-left: 20px;
            font-size: 30px;
        }
    </style>

    <a href="/api" class="back">
        <i class="fa-solid fa-caret-left"></i>
    </a>

    <table class="w3-table-all w3-hoverable mb-sm-5 mt-sm-3">
        @foreach ($data as $d)
            <tr>
                <td>
                    {{ $d->nomor }}
                </td>
                <td>
                    <span class="ayat">
                       {{ $d->ar }}
                    </span> 

                    </br>
                    {{ $d->id }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
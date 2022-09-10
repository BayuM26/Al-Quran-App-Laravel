@extends('layouts.tempat')
@section('content')

    <style>
        a{
            text-decoration: none;
        }

        .asma{
            font-size:20px;
        }
    </style>

    <table class="w3-table-all w3-hoverable">
        <thead>
            <tr class="w3-light-grey">
                <th>No.</th>
                <th>Nama Surah</th>
                <th>Keterangan</th>
                <th>Murottal</th>
            </tr>
        </thead>

        @foreach ($data as $d)
            <tr>
                <td>
                    <a href="/api/{{ $d->nama }}/{{ $d->nomor }}">
                        {{ $d->nomor}}
                    </a>
                </td>
                <td>
                    <a href="/api/{{ $d->nama }}/{{ $d->nomor }}">
                        <span class="asma">
                            {{ $d->asma }}
                        </span>
                        ({{ $d->nama }})
                    </a>
                </td>
                <td style="text-align: justify;">
                    <a href="/api/{{ $d->nama }}/{{ $d->nomor }}" >
                        {!! $d->keterangan !!}
                    </a>
                </td>
                <td>
                    <audio controls>
                        <source src="{!! $d->audio !!}" type="audio/mpeg">
                        Browsermu tidak mendukung tag audio, upgrade donk!
                    </audio>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
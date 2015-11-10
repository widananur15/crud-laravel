@extends('layout/index')
@section('head')
    @stop
@section('content')
    <div class="container">
        <h2>Formulir</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">Daftar Nama</div>
            <div class="panel-body">
                <table border="1">
                    <tr>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Aksi</td>
                    </tr>

                @foreach($tampil as $value)
                    <tr>
                        <td>{{$value->nis}}</td>
                        <td>{{$value->nama}}</td>
                        <td><a href="{{URL::to('/hapus', $value->id)}}">Hapus</a> </td>
                    </tr>
                @endforeach

                </table>
            </div>
        </div>
    </div>
    @stop
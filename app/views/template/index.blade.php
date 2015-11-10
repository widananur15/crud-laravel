@extends('layout/index')
@section('head')
    <title>Coba Laravel</title>
    @stop
@section('content')
    <div class="container">
        <h2>Formulir</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">Input</div>
            <div class="panel-body">
                <form method="post" action="{{URL::to('/simpan')}}">
                <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="form-control" name="nis" placeholder="NIS">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                    <input type="submit" class="btn btn-default" value="SIMPAN">
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop
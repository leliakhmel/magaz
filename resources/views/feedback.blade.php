@extends('layouts.app')

@section('styles')
@parent
  <link href='{{asset('media/css/index.css')}}' rel="stylesheet"/>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать на сайт</div>

                <div class="panel-body">
                    Главная страница
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

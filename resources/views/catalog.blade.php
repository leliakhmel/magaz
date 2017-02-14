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
                <div class="panel-heading">Каталог</div>
                <div class="panel-body">
					@foreach($all as $one)
					<h3>{{$one->name}}</h3>
					<div>{{$one->price}}</div>
					<div>{{$one->textarea}}</div>
					@if($one->tovar=='-'):
						<img src="{{asset('media/img/kart.jpg')}}"/>
					@else
						<img src="{{asset('media/photos/s_'.$one->tovar)}}"/>
					@endif
					
					@if(Auth::user()):
					<div class="menu">
		                <a href="{{asset('/home/delete/'.$one->id)}}" class="btn btn-block btn-default"> Удалить </a>
		                <a href="{{asset('/home/edit/'.$one->id)}}" class="btn btn-block btn-default"> Редактировать </a>
                    </div>
					@else
					<div class="menu">
		                <a href="{{asset('/home/korzina/'.$one->id)}}" class="btn btn-block btn-default"> Добавить в корзину </a>
                    </div>
					@endif
					@endforeach
                </div>
				 
        </div>
    </div>
</div>
@endsection

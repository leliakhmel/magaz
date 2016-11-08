@extends('layouts.app')

@section('styles')
@parent
  <link href='{{asset('media/css/index.css')}}' rel="stylesheet"/>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-20 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" align="middle">Интернет-магазин электротехники</div>
                <div class="panel-body">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="media/img/kart.jpg" alt="kart.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
	
    <div class="item">
      <img src="media/img/apple_airpods_wireless.jpg" alt="apple_airpods_wireless.jpg">
    </div>
	
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                   <!-- <img align="middle" width="100%" src="media/img/apple_airpods_wireless.jpg" alt="AppleAirpods" />-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

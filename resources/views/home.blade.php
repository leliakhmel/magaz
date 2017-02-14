@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Форма добавления товара</div>
				@if(count($errors)>0)
					@foreach($errors->all() as $err)
				       <h3 class="">{{$err}}</h3>
				    @endforeach
				@endif
					<form method='POST' action='home' enctype='multipart/form-data'>
					{{csrf_field()}} 
                    <div class="form-group">
                       <label for="name">Название</label>
                       <input type="text" name='name' class="form-control" id="name" placeholder="Название">
                    </div>
                    <div class="form-group">
                       <label for="price">Цена</label>
                       <input type="text" name='price' class="form-control" id="price" placeholder="Цена">
                    </div>
					 <div class="form-group">
                       <label for="textarea">Описание</label>
                       <textarea class="form-control" name='textarea' rows="3" placeholder="Описание"></textarea>
                    </div>
					<div class="form-group">
                       <label for="categoria_id">Категория</label>
                       <select class="form-control" name='categoria_id' id="categotia_id">
                          <option value=1>iPhone</option>
                          <option value=2>iPad</option>
                          <option value=3>iPod</option>
						  <option value=4>iMac</option>
						  <option value=5>MacBook</option>
						  <option value=6>Apple Watch</option>
                          <option value=7>Аксессуары</option>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="tovar">Добавить товар</label>
                       <input type="file" name='picture1' id="tovar">
                    </div>               
                    <button type="submit" class="btn btn-default">Добавить</button>
                    </form>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

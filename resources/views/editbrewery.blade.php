@extends('layouts.layout')

@section('title', 'Mi cervecería')

@section('pagetitle', 'Cervecería')

@section('content')

<br>
  <form enctype="multipart/form-data" method="post" action="{{ route ('editbrewery')}}">
    @csrf
    
    <input type="hidden" id="id" name="id" value="{{$brewery->id}}">
    
    <div class="col d-flex justify-content-center">
      <div class="card">
          <div class="card-body  d-flex row ">
              <p class="card-title text-center text-success">
                  <label for="title" class="form-label">Cervecería</label>
                  <input type="text" name="title" id="title" value="{{ $brewery->name}}" placeholder="Indica aquí el nombre de la cervecería"
                      class="form-control"></p>
              <p class="card-text"><label for="cuerpo" class="form-label">Descripción</label>
                  <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3">{{$brewery->description}}</textarea></p>
              <p class="card-text">
                  <label for="place" class="form-label">Localidad</label>
                  <input type="text" name="place" id="place" value="{{ $brewery->place }}" placeholder="Indica aquí la localidad"
                      class="form-control"></p>
  
              <p class="card-text">
                  <label for="file" class="form-label">Imagen</label>
                  <input type="file" name="img" id="img" 
                      class="form-control"></p>
          </div>
      </div>
  </div>
  
            <br>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Guardar</button>
      </div>
  </form>
  <br>
  <p class="text-center"><a class="btn btn-warning" href="{{ route ('breweries') }}">Volver</a></p>

 @endsection

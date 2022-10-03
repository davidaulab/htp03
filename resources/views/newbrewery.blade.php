@extends('layouts.layout')

@section('title', 'Mi cervecería')

@section('pagetitle', 'Cervecería')

@section('content')
<script type="text/javascript" lang="javascript">

  function preEnvio () {
    if (document.getElementById('title').value == '') {
       document.getElementById('mensaje').innerHTML = '<p>El campo título está vacío</p>';
       document.getElementById('mensaje').style.display = 'inline';
       return false;  
    }

  }

  </script>
<br>
  <form enctype="multipart/form-data" method="post" action="" onsubmit="return preEnvio ()">
    @csrf

        <x-editcard /> 
            <br>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Guardar</button>
      </div>
  </form>
  <div id="mensaje" style="display: none"></div>
  <br>
  <p class="text-center"><a class="btn btn-warning" href="{{ route ('breweries') }}">Volver</a></p>

 @endsection

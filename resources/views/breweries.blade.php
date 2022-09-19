@extends('layouts.layout')

@section('title', 'Listado de cervecerías')

@section('pagetitle', 'Cervecerías')

@section('content')
<div class="row row-cols-1 row-cols-md-3 row-cols-xld-2 g-4">
  @foreach ($breweries as $brewery)

      <!--p>{{ $brewery[0] }} - {{ $brewery[1] }} - {{ $brewery[2] }}</p-->
      <div class="col">
          <div class="card">
            <div class="card-body  d-flex row">
              <h5 class="card-title">{{ $brewery[1] }}</h5>
              <p class="card-text">{{ $brewery[2] }}</p>
              <a class="btn btn-warning" href="/brewery/{{ $brewery[0] }}">Ver más</a>
              
            </div>
          </div>
        </div>
  @endforeach
  </div>
@endsection
 
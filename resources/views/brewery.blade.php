@extends('layouts.layout')

@section('title', 'Mi cervecería')

@section('pagetitle', 'Cervecería')

@section('content')

        <div class="row row-cols-1 row-cols-md-2 g-4 " style="max-width: 50rem;">
             <div class="col">
                <div class="card">
                  <div class="card-body  d-flex row">
                    <h5 class="card-title">{{ $brewery[1] }}</h5>
                    <p class="card-text">{{ $brewery[2] }}</p>
                  </div>
                </div>
              </div>
       
        </div>
        <br>
        <a class="btn btn-warning" href="{{ route ('breweries') }}">Volver</a>
            
 @endsection
@extends('layouts.layout')

@section('title', 'Mi cervecería')

@section('pagetitle', 'Cervecería')

@section('content')

<br>

        <x-card title="{{ $brewery->name }}" body="{{ $brewery->description }}" text >
      </x-card> 
            
        <br>
        <p class="text-center"><a class="btn btn-warning" href="{{ route ('breweries') }}">Volver</a></p>



 @endsection

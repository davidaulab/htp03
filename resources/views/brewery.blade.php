@extends('layouts.layout')

@section('title', 'Mi cervecería')

@section('pagetitle', 'Cervecería')

@section('content')

<br>

<x-card title="{{ $brewery->name }}" body="{{ $brewery->description }}" img="{{ $brewery->img }}"
    place="{{ $brewery->place }}">
</x-card>

<br>
<div class="d-flex justify-content-around">
  
    <a class="btn btn-success" href="{{ url ('/editbrewery/') . '/' . $brewery->id }}">Modificar</a>
    <form method="post" action="{{ url ('/deletebrewery')}}">
      @csrf
    <input type="hidden" name="id" id="id" value="{{$brewery->id}}">  
    <button type="submit" class="btn btn-danger" >Borrar</button>
    </form>
    <a class="btn btn-warning" href="{{ route ('breweries') }}">Volver</a>
  </div>



@endsection

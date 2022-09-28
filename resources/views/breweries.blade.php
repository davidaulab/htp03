@extends('layouts.layout')

@section('title', 'Listado de cervecerías')

@section('pagetitle', 'Cervecerías')

@section('content')
<div class="row row-cols-1 row-cols-md-3 row-cols-xld-2 g-4">
   
    @foreach ($breweries as $brewery)

    <x-card title="{{ $brewery->name }}" 
    body="{{ $brewery->description }}" 
    link="/brewery/{{ $brewery->id }}" text>
        <x-slot:text>
            <p class="bg-red">Disclaimer / <b>Exención de responsabilidad</b></p>
        </x-slot:text>
    </x-card>

    @endforeach
</div>
@endsection

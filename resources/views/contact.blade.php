@extends('layouts.layout')

@section('pagetitle', 'Contacto')

@section('content')




<form method="post" action="">

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Tu nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Indica tu nombre">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email de contacto</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Qué nos quieres cometar?">
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-warning">Enviar consulta</button>
    </div>
</form>

@endsection

@props([
'text',
'auxiliar',
'img',
'place'

])

<div class="col d-flex justify-content-center">
    <div class="card"> 

      <img src="{{ ( ($img == "") ? asset ('/img/logo.png') : $img) }}" class="card-img-top" alt="{{ $title }}">
        <div class="card-body  d-flex row ">

            <h5 class="card-title text-center text-success">{{ $title }}</h5>
            <p class="card-text">{{ $body }}</p>
            <p class="card-text"><b>{{ $place }}</b></p>
            
            @if ($link != '')
            <p class="text-center mt-auto"><a class="btn btn-primary" href="{{ $link }}">Ver más</a></p>
            @endif
        </div>
    </div>
</div>

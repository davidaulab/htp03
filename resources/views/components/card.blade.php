@props([
'text',
'auxiliar'
])

<div class="col d-flex ">
    <div class="card">
        <div class="card-body  d-flex row ">
            <h5 class="card-title text-center text-success">{{ $title }}</h5>
            <p class="card-text">{{ $body }}</p>
            @if ($link != '')
            <p class="text-center mt-auto"><a class="btn btn-primary" href="{{ $link }}">Ver más</a></p>
            @endif
        </div>
    </div>
</div>

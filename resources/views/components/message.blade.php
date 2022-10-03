@if ($type != "")
<div class="w-100 text-center m-4">
    <p class="bg-{{ $type }}  p-3">{{ $message }}</p>
</div>
@endif


@if ($errors->all())

<div class="text-center m-4 bg-danger">
    <p class="  p-3 text-white">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </p>
</div>

@endif

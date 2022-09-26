@component('mail::message')
<style>
    i {color: red}
    b {text-decoration: underline}
    </style>
<p>Mensaje desde la web</p>
<p>El vistante <i>{{ $name }}</i> <b>&lt;{{$email}}&gt;</b> ha sugerido  </p>
<p>{{$webSubject}}</p>    

<p>{{$body}}</p>    
@endcomponent

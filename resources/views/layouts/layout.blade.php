@extends('layouts.app')
@section('body')
  

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="{{ asset ('/img/logo.png') }}" height="30"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ("breweries") }}">Cervecerías</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url ('/contact') }}">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route ("main") }}">Quienes somos</a>
                  </li>
                 
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <h1 class="text-center">@yield ('pagetitle')</h1>

    <div class="container-fluid" style="max-width: 800px">
      @yield ('content')
    </div>

    @endsection

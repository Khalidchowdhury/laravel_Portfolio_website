@extends('dashboard.layouts.app')

@section('main')
    <div class="sb-nav-fixed">
        @include('dashboard.layouts.header')
        <div id="layoutSidenav">
        @include('dashboard.layouts.sidebar')

    {{-- Dashboard Content start --}}

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                
                <h1 class="mt-4">Portfolio View</h1>

                <div class="card p-5 mt-5" style="width: 36rem;">
                    <img class="img-fluid" src="{{ url( $gallarys->image ) }}" />
                    <div class="card-body">
                      <h5 class="card-title">{{ $gallarys->title }}</h5>
                      <p class="card-text">{{ $gallarys->subtitle }}</p>
                      <p class="card-text">{{ $gallarys->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Client: {{ $gallarys->client }}</li>
                      <li class="list-group-item">Category: {{ $gallarys->category }}</li>
                    </ul>
                    <div class="card-body">
                      <a href="{{ route('portfolio.store.page') }}" class="btn btn-primary">Back</a>
                    </div>
                  </div>

                

            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

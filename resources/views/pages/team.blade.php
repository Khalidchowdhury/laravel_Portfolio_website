@extends('layouts.app')



@section('main')
@include('layouts.navbar')
@include('layouts.sidebar')





    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">team</li>
                    </ol>                    
                    {{-- <h1>
                        Hello World
                    </h1> --}}
                </div>
            </main>
        </div>
    </div>



@endsection





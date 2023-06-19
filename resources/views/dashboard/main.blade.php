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
                
                <h1 class="mt-4">Header Section</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                
                @include('validate')
                {{-- Main Page Content Update Form Submission --}}
                <form action="{{ route('main.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="row">
                        {{-- Header Background image --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Background Image</h5>
                            <img class="img-thumbnail" src="{{ url( $mainPages->header_img ) }}" alt="Background">
                            <input type="file" name="header_img" class="form-control">
                        </div> <br>

                        {{-- title & sub title side --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Title</h5>
                            <input type="text" name="title" class="form-control" value="{{ $mainPages->title }}">
                            <h5 class="mt-5">Sub Title</h5>
                            <input type="text" name="subtitle" class="form-control" value="{{ $mainPages->subtitle }}">
                        </div>                         
                        {{-- button side --}}
                        <div class="form-group col-md-3 mt-3">
                            <h6>Button Name</h6>
                            <input type="text" name="button_name" class="form-control" value="{{ $mainPages->button_name }}">
                            <h6 class="mt-3">Button link</h6>
                            <input type="text" name="button_url" class="form-control" value="{{ $mainPages->button_url }}">
                        </div> 
                    </div>
                    <div class="row">
                        {{-- Logo setup --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Your Logo </h5>
                            <img class="img-thumbnail" src="{{ url( $mainPages->logo ) }}" alt="Background">
                            <input type="file" name="logo" class="form-control">
                        </div>   
                    </div>
                    <button name="Update Now" type="submit" class="btn btn-primary mt-5">Update Now</button>
                </form>
                {{-- end form  --}}

            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection






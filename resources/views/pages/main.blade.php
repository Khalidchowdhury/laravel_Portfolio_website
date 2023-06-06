@extends('layouts.app')



@section('main')
@include('layouts.navbar')
@include('layouts.sidebar')





<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Main Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">main</li>
                </ol>        
                
          
                @include('validate')
                {{-- Main Page Content Update Form Submission --}}
                <form action="{{ route('main.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h5>Background Image</h5>
                            <img class="img-thumbnail" src="{{ url( $portfolios->bg_img ) }}" alt="Background">
                            <input type="file" name="bg_img" class="form-control">
                        </div>   

                        {{-- title & sub title side --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Title</h5>
                            <input type="text" name="title" class="form-control" value="{{ $portfolios->title }}">
                            <h5 class="mt-5">Sub Title</h5>
                            <input type="text" name="sub_title" class="form-control" value="{{ $portfolios->sub_title }}">
                        </div>                         
                        {{-- button side --}}
                        <div class="form-group col-md-3 mt-3">
                            <h6>Button Name</h6>
                            <input type="text" name="button_name" class="form-control" value="{{ $portfolios->button_name }}">
                            <h6 class="mt-3">Button link</h6>
                            <input type="text" name="button_link" class="form-control" value="{{ $portfolios->button_link }}">
                        </div> 
                    </div>
                    <button name="Update Now" type="submit" class="btn btn-primary mt-5">Update Now</button>
                </form>

                {{-- end form  --}}


            </div>
        </main>
    </div>
</div>



@endsection





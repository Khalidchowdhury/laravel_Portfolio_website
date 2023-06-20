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
                {{-- Section title --}}
                <h1 class="mt-4">Portfolio Create</h1>

                
                @include('validate')
                {{-- Main Page Content Update Form Submission --}}
                <form action="{{ route('portfolio.create.page') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="row">
                        {{-- Thumbnail image --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Thumbnail Image</h5>
                            <img class="img-thumbnail" src="" alt="">
                            <input type="file" name="image" class="form-control">
                            <h6 class="mt-5">Client Name</h6>
                            <input type="text" name="client" class="form-control" value="">
                            <h6 class="mt-3">Category Name</h6>
                            <input type="text" name="category" class="form-control" value="">
                        </div> <br>

                        {{-- title & sub title side --}}
                        <div class="form-group col-md-3 mt-3">
                            <h5>Title</h5>
                            <input type="text" name="title" class="form-control" value="">
                            <h5 class="mt-5">Sub Title</h5>
                            <input type="text" name="subtitle" class="form-control" value="">
                            <h5 class="mt-5">Description</h5>
                            <textarea type="text" name="description" class="form-control" value=""> </textarea>
                        </div>                         

                    </div>
                    <button name="Update Now" type="submit" class="btn btn-primary mt-5">Add Portfolio</button>
                </form>
                {{-- end form  --}}

            </div>
        </main>
    </div>
    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection






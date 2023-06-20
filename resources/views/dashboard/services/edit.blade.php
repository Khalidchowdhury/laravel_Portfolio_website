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
                
                <h1 class="mt-4">Services Edit </h1>
                <ol class="breadcrumb mb-4">
                </ol>
                @include('validate')
                {{-- Create Servics Section --}}
                <Form action="{{ route('services.page') }}" method="POST" class="pt-5">
                    @csrf
                    <h3>Services Edit </h3>
                    <div class="row">
                        {{-- Services Font awesome Icon --}}
                        <div class="form-group col-md-3 mt-3">
                            <h6>Font Awesome Icon</h6>
                            <input type="text" name="icon" class="form-control">
                        </div>  
                    </div>
                    <div class="row">
                        {{-- Services Title --}}
                        <div class="form-group col-md-3 mt-3">
                            <h6>Title</h6>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="row">                     
                        {{-- Services Description --}}
                        <div class="form-group col-md-3 mt-3">
                            <h6>Description</h6>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div> 
                    </div>

                    <button class="btn btn-primary mt-5" type="submit">Add Services</button>

                </Form>


            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

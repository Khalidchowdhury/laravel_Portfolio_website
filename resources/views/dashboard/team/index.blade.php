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
                <h1 class="mt-4">Team Create</h1>

                
                @include('validate')
                {{-- Main Page Content Update Form Submission --}}
                <form action="{{ route('team.create.page') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h5>Hero Image</h5>
                            <img class="img-thumbnail">
                            <input type="file" name="hero_image" class="form-control">
                            <h6 class="mt-5">Hero Name</h6>
                            <input type="text" name="name" class="form-control">
                            <h6 class="mt-3">Hero Skill</h6>
                            <input type="text" name="skill" class="form-control">
                        </div> <br>


                        <div class="form-group col-md-3 mt-3">
                            <h5>Social Icon & Link</h5>

                            <p class="mt-5">1st Social Icon </p>
                            <input type="text" name="social1_name" class="form-control">
                            <p class="mt-5">1st Social Icon link </p>
                            <input type="text" name="social1_link" class="form-control">
                            <p class="mt-5">2nd Social Icon </p>
                            <input type="text" name="social2_name" class="form-control">
                            <p class="mt-5">2nd Social Icon link </p>
                            <input type="text" name="social2_link" class="form-control">   
                            <p class="mt-5">3rd Social Icon </p>
                            <input type="text" name="social3_name" class="form-control">
                            <p class="mt-5">3rd Social Icon link </p>
                            <input type="text" name="social3_link" class="form-control">

                        </div>                         

                    </div>
                    <button name="Update Now" type="submit" class="btn btn-primary mt-5">Add Portfolio</button>
                </form>

            </div>
        </main>
    </div>

        </div>
    </div>
    
@endsection






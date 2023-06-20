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
                
                <h1 class="mt-4">Portfolio List</h1>

                <table class="table mt-5 p-5">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Client</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      

                    @forelse ( $gallarys as $gallary )
                      <tr>
                        <td width="200"><img class="img-fluid" src="{{ url( $gallary->image ) }}" /></td>
                        <td width="200">{{ $gallary->title }}</td>
                        <td width="250">{{ $gallary->subtitle }}</td>
                        <td width="400">{{ $gallary->description }}</td>
                        <td>{{ $gallary->client }}</td>
                        <td>{{ $gallary->category }}</td>
                        <td class="text-center" width="100">
                            <div class="btn-group align-top mt-3">
                                <button class="btn btn-sm btn-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">
                                  <a class="text-light text-decoration-none" href="#">Edit</a></button>
                                <button class="btn btn-sm btn-danger badge" type="button">
                                  <a href="{{ route('portfolio.delete.page', $gallary -> id ) }}"><i class="fa fa-trash text-light"></i></a>
                                </button>
                            </div>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6" class="text-center p-3 text-primary"><h4>No Services Found</h4></td>
                      </tr>
                    @endforelse


                    </tbody>
                  </table>


            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

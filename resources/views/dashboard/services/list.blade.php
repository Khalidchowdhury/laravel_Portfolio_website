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
                
                <h1 class="mt-4">Services List</h1>

                <table class="table mt-5 p-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ( $services as $service )
                          <tr>
                            <th>{{ $loop -> index+1 }}</th>
                            <td>{{ $service -> icon }}</td>
                            <td>{{ $service -> title }}</td>
                            <td width="500">{{ $service -> description }}</td>
                            <td>
                                <div class="btn-group align-top mt-3">
                                    <button class="btn btn-sm btn-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">
                                      <a class="text-light text-decoration-none" href="{{ route('showServices.edit', $service -> id) }}">Edit</a></button>
                                    <button class="btn btn-sm btn-danger badge" type="button">
                                      <a href="{{ route('services.delete.page', $service -> id) }}"><i class="fa fa-trash text-light"></i></a>
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

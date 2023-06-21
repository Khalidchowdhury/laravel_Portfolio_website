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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th width="400">Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                <tbody>
                      

                      @forelse ( $contacts as $contact )
                        <tr>
                          <td>{{ $contact->name }}</td>
                          <td>{{ $contact->email }}</td>
                          <td>{{ $contact->phone }}</td>
                          <td>{{ $contact->description }}</td>
                          <td>
                              <div class="btn-group align-top mt-3">
                                  <button class="btn btn-sm btn-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">
                                    <a class="text-light text-decoration-none" href="#">View</a></button>
                                  <button class="btn btn-sm btn-danger badge" type="button">
                                    <a href="{{ route('contact.delete', $contact->id) }}"><i class="fa fa-trash text-light"></i></a>
                                  </button>
                              </div>
                          </td>
                        </tr>
                      @empty
                        
                      @endforelse


                      {{-- @empty
                      <tr>
                        <td colspan="6" class="text-center p-3 text-primary"><h4>No Contact Found</h4></td>
                      </tr>
                    @endforelse --}}


                    </tbody>
                  </table>


            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

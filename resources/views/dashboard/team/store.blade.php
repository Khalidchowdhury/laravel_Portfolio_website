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
                      <th width="200">Image</th>
                      <th width="200">Title</th>
                      <th width="200">Sub Title</th>
                      <th scope="col">Client</th>
                      <th scope="col">Category</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                        <tr>
                          <td scope="row"><img class="img-fluid" src="" /></td>
                          <td>Something</td>
                          <td>Something</td>
                          <td>Something</td>
                          <td>Something</td>
                          <td class="text-center" width="100">
                              <div class="btn-group align-top mt-3">
                                  <button class="btn btn-sm btn-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">
                                    <a class="text-light text-decoration-none" href="#">View</a></button>
                                  <button class="btn btn-sm btn-danger badge" type="button">
                                    <a href="#"><i class="fa fa-trash text-light"></i></a>
                                  </button>
                              </div>
                          </td>
                        </tr>

                  </tbody>
              </table>


            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

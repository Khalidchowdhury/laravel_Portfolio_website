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
                
                <h1 class="mt-4">Team List</h1>


                @include('validate')
                <table class="table mt-5 p-5">

                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th width="200">name</th>
                      <th width="200">skill</th>
                      <th scope="col">1st Socail</th>
                      <th scope="col">2nd Socail</th>
                      <th scope="col">3rd Socail</th>
                      <th scope="col">ACtion</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                    @foreach ( $teams as $team )
                      <tr>
                        <td width="100"><img style="width: 100%" src="{{ url($team->hero_image) }}"/></td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->skill }}</td>
                        <td>{{ $team->social1_name }}</td>
                        <td>{{ $team->social2_name }}</td>
                        <td>{{ $team->social3_name }}</td>
                        <td class="text-center" width="100">
                            <div class="btn-group align-top mt-3">
                                <button class="btn btn-sm btn-primary badge" type="button" data-toggle="modal" data-target="#user-form-modal">
                                  <a class="text-light text-decoration-none" href="#">Edit</a></button>
                                <button class="btn btn-sm btn-danger badge" type="button">
                                  <a href="{{ route('team.delete.page', $team->id) }}"><i class="fa fa-trash text-light"></i></a>
                                </button>
                            </div>
                        </td>
                      </tr>
                    @endforeach


                  </tbody>
              </table>


            </div>
        </main>
    </div>


    {{-- dashboard Content end --}}


        </div>
    </div>
    
@endsection

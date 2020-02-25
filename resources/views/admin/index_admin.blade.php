
@extends('layouts/header')
@section('title', 'Admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Destination</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

          <table class="table">

          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Destination</th>
              <th scope="col">Categories</th>
              <th scope="col">Location</th>
              <th scope="col">Description</th>
              <th scope="col">View</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $destination as $dst)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{$dst->name}}</td>
              <td>{{$dst->category}}</td>
              <td>{{$dst->location}}</td>
              <td>{{$dst->description}}</td>
              <td><img src="{{ url('image/'.$dst->image) }}" width="150px"> </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        {{ $destination->links() }}
        </div>

        <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

              <table class="table">

              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Categories</th>
                </tr>
              </thead>
              <tbody>
              @foreach( $category as $cat)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{$cat->nama_cat}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>

        </div>
        <!-- /.container-fluid -->
      </div>
      </div>
      <!-- End of Main Content -->
      @endsection

      
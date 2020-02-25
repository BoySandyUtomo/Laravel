
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
              <th scope="col">Action</th>
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
              <td>
             <a href="{{ url('/update', $dst->id) }}" class="badge badge-success">Edit</a>
             <a href="{{ url('/delete', $dst->id) }}" class="badge badge-danger">Delete</a>
             </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        {{ $destination->links() }}

        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      @endsection

      
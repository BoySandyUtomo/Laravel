
@extends('layouts/header')
@section('title', 'Admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a type="submit" class="btn btn-success" href="/exportExcelCat">Export</a>
          </div>
          

          <!-- Content Row -->
          <div class="row">

          <table class="table">

            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Categories</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach( $category as $cat)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$cat->nama_cat}}</td>
                <td>
                  <a href="{{ url('/updateCat', $cat->id_cat) }}" class="badge badge-success">Edit</a>
                  <a href="{{ url('/deleteCat', $cat->id_cat) }}" class="badge badge-danger">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          {{ $category->links() }}
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      @endsection

      
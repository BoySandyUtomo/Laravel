@extends('layouts/header')
@section('title', 'Create ')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Destination</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="{{ url('/storeCat') }}">
            @csrf

                <div class="form-group">
                    <label for="nama_cat">Categories</label>
                    <input type="text" class="form-control" id="nama_cat" name="nama_cat">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>

          </div>

      </div>
      <!-- End of Main Content -->
      @endsection

      
@extends('layouts/header')
@section('title', 'Create')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Destination</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="{{ url('/store') }}">
            @csrf
                <div class="form-group">
                    <label for="name">Destination</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    <option value="" hidden>Select</option>
                    @foreach($category as $cat)
                        <option value="{{ $cat->id_cat }}">{{ $cat->nama_cat }}</option>
                    @endforeach
                </select>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">View</label>
                    <input input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>

          </div>

      </div>
      <!-- End of Main Content -->
      @endsection

      
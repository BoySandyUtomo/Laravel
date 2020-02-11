@extends('layout/main')
@section('judul', 'Edit')
  <!-- Portfolio Grid -->
@section('isi')
<div class="card-body">
    <br/>
    <br/>
    
    <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/product/update/{{ $product->id }}">

        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="{{ $product->name }}">

            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label>Divisi</label>
            <select class="form-control" id="category" name="category">
                <option value="" hidden>Select Role</option>
                @if( $product->category == '1')
                    <option value="1" selected>Mountain</option>
                    <option value="2">See</option>
                    <option value="3">Savana</option>
                @elseif( $product->category == '2')
                    <option value="1">Mountain</option>
                    <option value="2" selected>See</option>
                    <option value="3">Savana</option>
                @elseif( $product->category == '3')
                    <option value="1">Mountain</option>
                    <option value="2">See</option>
                    <option value="3" selected>Savana</option>
                @else
                    <option value="1">Mountain</option>
                    <option value="2">See</option>
                    <option value="3">Savana</option>
                @endif
            </select>

        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" label for="file-upload" id="file-drag">Choose file</label>
            </div>
          </div>

        <div class="form-group">
            <input type="submit" class="btn btn-dark" value="Simpan">
        </div>

    </form>

</div>
@endsection
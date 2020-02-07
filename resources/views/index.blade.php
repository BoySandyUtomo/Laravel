@extends('layout/main')
@section('judul', 'Wisata')
  <!-- Portfolio Grid -->

  @section('isi')
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">View</th>
      <th scope="col">Actionm</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $product as $prd)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$prd->name}}</td>
      <td>{{$prd->category}}</td>
      <td> <img src="{{ url('image/'.$prd->image) }}" width="150px"> </td>
      <td><a href="/product/edit/{{ $prd->id }}" class="badge badge-success">Edit</a>
        <a href="/product/delete/{{ $prd->id }}" class="badge badge-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="card-body">
    <br/>
    <br/>
    
    <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/product/store">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">

            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label>Category</label>
            <textarea name="category" class="form-control" placeholder="Category"></textarea>

             @if($errors->has('category'))
                <div class="text-danger">
                    {{ $errors->first('category')}}
                </div>
            @endif

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

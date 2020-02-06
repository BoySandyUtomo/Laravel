@extends('layout/main')
@section('judul', 'Edit')
  <!-- Portfolio Grid -->
@section('isi')
<div class="card-body">
    <br/>
    <br/>
    
    <form method="post" action="/product/update/{{ $product->id }}">

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
            <label>Category</label>
            <textarea name="category" class="form-control" placeholder="{{ $product->category }}"></textarea>

             @if($errors->has('category'))
                <div class="text-danger">
                    {{ $errors->first('category')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-dark" value="Simpan">
        </div>

    </form>

</div>
@endsection
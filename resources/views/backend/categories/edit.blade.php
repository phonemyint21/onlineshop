@extends('backend.master')
@section('content')
<h2>Category Edit</h2>
<form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="hidden" name="oldphoto" id="" value="{{ $category->photo }}">

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Brand Name :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="category" value="{{ $category->name }}">
        <span class="text-danger">{{ $errors->first('category')}}</span>
      </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Brand Logo :</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="" name="photo"><br>
          <img src="{{ asset($category->photo) }}" alt="" width="100" height="100">
          <span class="text-danger">{{ $errors->first('photo')}}</span>
        </div>
      </div>

      
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>
@endsection
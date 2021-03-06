@extends('backend.master')
@section('content')
<h2>Brand Create</h2>
<form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Brand Name :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="brand">
        <span class="text-danger">{{ $errors->first('brand')}}</span>
      </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Brand Logo :</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="" name="photo">
          <span class="text-danger">{{ $errors->first('photo')}}</span>
        </div>
      </div>
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </form>
@endsection
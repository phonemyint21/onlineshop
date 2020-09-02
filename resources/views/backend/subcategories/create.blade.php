@extends('backend.master')
@section('content')
<h2>Subcategory Create</h2>
<form action="{{ route('subcategories.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Name :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name">
       <span class="text-danger">{{ $errors->first('name')}}</span>
      </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Category Id :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="id">
          <span class="text-danger">{{ $errors->first('id')}}</span>
        </div>
      </div>
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
@endsection
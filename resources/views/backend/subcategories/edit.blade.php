@extends('backend.master')
@section('content')
<h2>Category Edit</h2>
<form action="{{ route('subcategories.update',$subcategory->id) }}" method="post">
    @csrf
    @method('put')

  

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Subcategory Name :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="subcategory" value="{{ $subcategory->name }}">
        <span class="text-danger">{{ $errors->first('subcategory')}}</span>
      </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Category :</label>
        <div class="col-sm-6">
          <select class="form-control form-control-md" id="inputBrand" name="id">
                <optgroup label="Choose Brand">
                  @foreach($categories as $category)
                        <option value="{{$category->id}}">
                          {{ $category->name }}
                        </option>
                  @endforeach
                </optgroup>
              </select>
              <span class="text-danger">{{ $errors->first('id')}}</span>
        </div>
      </div>

      
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>
@endsection


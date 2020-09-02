@extends('backend/master')

@section('content')
   <div class="container-fluid">
   	   <div class="d-sm-flex align-items-center justify-content-between mb-4">
   	   	  <h1 class="h3 mb-0 text-gray-800">Items Edit Form</h1>
   	   	  <br>
   	   	  
   	   </div>
   	   <form action="{{ route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
   	   	@csrf
   	   	@method('PUT')
   	   	  	<div class="form-group row">
				    <label for="code" class="col-sm-2 col-form-label">Code No</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				      <span class="text-danger">{{ $errors->first('codeno')}}</span>
				    </div>
                    
				    
            </div>

            <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" name="name" value="{{$item->name}}">
				      <span class="text-danger">{{ $errors->first('name')}}</span>
				    </div>
            </div>
            <div class="form-group row">
				    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
				   <div class="col-sm-4">
				   	<input type="file" class="form-control-file" name="photo">
				   	<span class="text-danger">{{ $errors->first('photo')}}</span>
				   	<img src="{{asset($item->photo)}}" class="img-fluid w-25">
				   	<input type="hidden" name="oldphoto" value="{{$item->photo}}">
				   </div>
            </div>
            <div class="form-group row">
				    <label for="price" class="col-sm-2 col-form-label">Price</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" name="price" value="{{$item->price}}">
				      <span class="text-danger">{{ $errors->first('price')}}</span>
				    </div>
            </div>
            <div class="form-group row">
				    <label for="discount" class="col-sm-2 col-form-label">Discount</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" name="discount" value="{{$item->discount}}">
				      <span class="text-danger">{{ $errors->first('discount')}}</span>
				    </div>
            </div>
            <div class="form-group row">
				    <label for="description" class="col-sm-2 col-form-label">Description</label>
				    <div class="col-sm-4">
				      <textarea class="form-control" name="description">{{$item->description}}</textarea>
				      <span class="text-danger">{{ $errors->first('description')}}</span>
				    </div>
            </div>
            <div class="form-group row">
            	<label for="brand" class="col-sm-2 col-form-label">Brand</label>
            	<div class="col-md-6">
                    
            		<select class="form-control form-control-md" id="inputBrand" name="brand">
            		<optgroup label="Choose Brand">
            			@foreach($brands as $brand)
            			<option value="{{$brand->id}}">{{$brand->name}}</option>
            			@endforeach
            		</optgroup>
            		
            	</select>
            	<span class="text-danger">{{ $errors->first('brand')}}</span>
            	</div>
            	
            	
            </div>
            <div class="form-group row">
            	<label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
            	<div class="col-md-6">
            		
            		<select class="form-control form-control-md" id="inputSubategory" name="category">
            		<optgroup label="Choose Subcategory">
            			@foreach($subcategories as $subcategory)
            			<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
            			@endforeach
            		</optgroup>
            		
            	</select>
            	<span class="text-danger">{{ $errors->first('subcategory')}}</span>
            	</div>
            	
            	</div>
            

            <div class="form-group row">
             <div class="col-sm-10">
             	<input type="submit" class="btn btn-primary" value="update" name="submit">
             </div>
           </div> 	
            
   	   	  </form>
   </div>

@endsection   
@extends('backend/master')

@section('content')
   <div class="container-fluid">
   	   <div class="d-sm-flex align-items-center justify-content-between mb-4">
   	   	  <h1 class="h3 mb-0 text-gray-800">Items List</h1>
   	   	  <a href="{{ route('items.create')}}" class="btn btn-success">Add New</a>
   	   	  </div>
   	
   	   	  <div class="row">
   	   	  	<div class="col-md-12">
   	   	  		
   	   	  	<table class="table table-bordered">
   	   	  	<thead class="thead-dark">
   	   	  		<tr>
   	   	  			<th>No</th>
                    <th>Code No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
   	   	  		</tr>
   	   	  		
   	   	  	</thead> 
   	   	  	<tbody>
   	   	  		@php $i=1; @endphp
   	   	  		@foreach($items as $items)
   	   	  		<tr>
   	   	  			<td>{{$i++}}</td>
                    <td>{{$items->codeno}}</td>
                    <td>{{$items->name}}</td> 
                    <td>{{$items->price}}MMK</td>
                    <td>
                    	<a href="{{route('items.show',$items->id)}}" class="btn btn-primary">Detail</a>
                    	<a href="{{route('items.edit',$items->id)}}" class="btn btn-warning">Edit</a>
                    	<form method="post" action="{{route('items.destroy',$items->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                    </td>  	   	  			
   	   	  		</tr>
   	   	  		@endforeach
   	   	  	</tbody>
   	   	  		
   	   	  	</table> 
   	   	  		
   	   	  	</div>
   	   	  	
   	   	  </div>
   	   	  
   	   </div>
@endsection
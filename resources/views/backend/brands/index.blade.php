@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Brand</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('brands.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Brand Name</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($brands as $brand)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $brand->name }}</td>
                        <td><img src="{{ asset($brand->photo) }}" alt="hfeh" width="100" height="100"></td>
                        <td>
                            <div class="btn-gorup">
                                <a href="#" class="btn btn-primary">Detail</a>
                                <a href="{{ route('brands.edit', $brand->id ) }}" class="btn btn-warning">Edit</a>
                                <form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
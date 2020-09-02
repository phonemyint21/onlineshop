@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Categories</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset($category->photo) }}" alt="hfeh" width="100" height="100"></td>
                        <td>
                            <div class="btn-gorup">
                                <a href="#" class="btn btn-primary">Detail</a>
                                <a href="{{ route('categories.edit', $category->id ) }}" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
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
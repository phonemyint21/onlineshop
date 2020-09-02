@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Subcategories</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subategory Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>
                            <div class="btn-gorup">
                                <a href="#" class="btn btn-primary">Detail</a>
                                <a href="{{ route('subcategories.edit', $subcategory->id ) }}" class="btn btn-warning">Edit</a>
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
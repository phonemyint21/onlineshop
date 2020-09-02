@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Order List</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('orders.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Voucher No</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->voucherno }}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->total}}</td>
                        <td>
                            <div class="btn-gorup">
                                <a href="{{ route('orders.show', $order->id ) }}" class="btn btn-primary">Detail</a>
                                
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
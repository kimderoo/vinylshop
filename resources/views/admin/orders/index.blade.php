@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12 m-1">
        <h5>Orders</h5>
    </div>
</div>

<div class="row">
    <div class="col-11 m-1 mt-4">
        <table id="records_table" class="table display">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Token</th>
                    <th scope="col">User</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($orders)
                @foreach($orders as $order)

                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->token}}</td>
                    <td>{{$order->user ? $order->user->name : 'order without user'}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->updated_at}}</td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12">
        {{ $orders->render()}}
    </div>
</div>
@endsection
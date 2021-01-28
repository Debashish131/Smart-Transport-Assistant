@extends('master')

@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Renew Year</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Payment Account</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($details as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->Vehicle_number}}</td>
                <td>{{$val->Renew_year}}</td>
                <td>{{$val->Transaction_id}}</td>
                <td>{{$val->Payment_amount}}</td>
                <td>{{$val->created_at->diffForHumans()}}</td>
                <td><a href="/userRenewDelete{{$val->id}}" class="btn btn-outline-danger">Delete</a>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

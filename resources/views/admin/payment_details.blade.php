@extends('master')
@section('maincontent')
    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Amount</th>
            <th>Address</th>
            <th>Status</th>
            <th>Transaction ID</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($payment as $val)
            <tr>
{{--                <td class="item{{$val->id}}"></td>--}}
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->phone}}</td>
                <td>{{$val->amount}}</td>
                <td>{{$val->address}}</td>
                <td>{{$val->status}}</td>
                <td>{{$val->transaction_id}}</td>
                <td><a href="/deletepayment/{{$val->id}}/delete" class="btn btn-outline-danger">Delete</a>
            </tr>
        @endforeach

        </tbody>
    </table>
{{--            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Email</th>--}}
{{--                    <th>Phone</th>--}}
{{--                    <th>Amount</th>--}}
{{--                    <th>Address</th>--}}
{{--                    <th>Status</th>--}}
{{--                    <th>Transaction ID</th>--}}
{{--                    <th>Action</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}


{{--                <tbody>--}}
{{--                @foreach($payment as $val)--}}
{{--                <tr class="item{{$val->id}}">--}}
{{--                    <th scope="row">{{$val->id}}</th>--}}
{{--                    <td>{{$val->name}}</td>--}}
{{--                    <td>System Architect</td>--}}
{{--                    <td>Edinburgh</td>--}}
{{--                    <td>61</td>--}}
{{--                    <td>2011/04/25</td>--}}
{{--                    <td>$320,800</td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
@endsection

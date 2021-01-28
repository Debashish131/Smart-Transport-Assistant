@extends('master')

@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Father Name</th>
            <th scope="col">NID</th>
{{--            <th scope="col">Address</th>--}}
            <th scope="col">Phone</th>
            <th scope="col">Vehicle Num</th>
            <th scope="col">Approve</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->Name}}</td>
                <td>{{$val->Email}}</td>
                <td>{{$val->FatherName}}</td>
                <td>{{$val->NID}}</td>
{{--                <td>{{$val->Address}}</td>--}}
                <td>{{$val->Phone}}</td>
                <td>{{$val->vehicle->Vehicle_number}}</td>
                @if($val->Is_approved==0)
                    {{--                <td>{{$val->Is_approved}}</td>--}}
                    <td><span style="color: #bd2130">Pending</span></td>
                @else
                    <td><span style="color: #00b300">Approve</span></td>
                @endif
                <td><a href="/deleteUser/{{$val->id}}/delete" class="btn btn-outline-danger"><i
                            class="mdi mdi-delete-empty"></i></a>
                    <a href="/updateApplication{{$val->id}}" class="btn btn-outline-primary"><i
                            class="mdi mdi-account-edit"></i></a>
                </td>

        @endforeach
        </tbody>
    </table>

@endsection



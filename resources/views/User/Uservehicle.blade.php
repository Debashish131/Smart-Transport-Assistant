@extends('User.master')

@section('maincontent')
    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">Owner Name</th>
            <th scope="col">Vehicle Type</th>
            <th scope="col">Vehicle number</th>
            <th scope="col">BRTA office COde</th>
            <th scope="col">Condtion</th>
            <th scope="col">Issue Date</th>
            <th scope="col">Expire Date</th>
            <th scope="col">Approve Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($vehicle as $val)
            <tr>
                <td>{{$val->owner->Name}}</td>
                <td>{{$val->VehicleType}}</td>
                <td>{{$val->Vehicle_number}}</td>
                <td>{{$val->BRTAoffice}}</td>
                <td><img src="categorypic/{{$val['condition']}}" alt="No image found"
                         height="80"
                         width="80"></td>
                <td><span style="color: #00b300">{{$val->Issue_date}}</span></td>
                <td><span style="color: yellow">{{$val->Expire_date}}</span></td>
                <td>
                    @if($val->owner->Is_approved==0)
                        <span style="color: #bd2130">Pending</span>
                    @else($val->Is_approved==1)
                        <span style="color: #00b300">Approve</span>
                    @endif
                </td>
                <td><a href="#" class="btn btn-outline-danger" onclick="false">Delete</a>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

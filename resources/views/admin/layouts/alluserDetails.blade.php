@extends('master')

@section('maincontent')

    {{--    <table class="table dataTable" id="datatable">--}}
    {{--        <thead>--}}
    {{--        <tr>--}}
    {{--            <th scope="col">#</th>--}}
    {{--            <th scope="col">User name</th>--}}
    {{--            <th scope="col">Email</th>--}}
    {{--            <th scope="col">Father Name</th>--}}
    {{--            <th scope="col">NID</th>--}}
    {{--            <th scope="col">Address</th>--}}
    {{--            <th scope="col">Phone</th>--}}
    {{--            <th scope="col">Actions</th>--}}

    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--        <tbody>--}}
    {{--        @foreach($details as $val)--}}
    {{--            <tr>--}}
    {{--                <th scope="row">{{$val->id}}</th>--}}
    {{--                <td>{{$val->Name}}</td>--}}
    {{--                <td>{{$val->Email}}</td>--}}
    {{--                <td>{{$val->FatherName}}</td>--}}
    {{--                <td>{{$val->NID}}</td>--}}
    {{--                <td>{{$val->Address}}</td>--}}
    {{--                <td>{{$val->Phone}}</td>--}}
    {{--                <td><a href="/deleteUser/{{$val->id}}/delete" class="btn btn-outline-danger">Delete</a>--}}

    {{--            --}}{{--                <td><a href="/editcomplain{{$val->id}}" class="btn btn-outline-warning">Edit</a>--}}
    {{--            --}}{{--            </tr>--}}
    {{--        @endforeach--}}
    {{--        </tbody>--}}
    {{--    </table>--}}

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">Penalty</th>
            <th scope="col">Id creation Time</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($details as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->name}}</td>

                <td>{{$val->email}}</td>
                <td>{{$val->penalty->penalty}}</td>
                <td>{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</td>
                <td><a href="/DeleteUserprofile/{{$val->id}}/delete" class="btn btn-outline-danger">Delete</a>
                    <a href="/penaltyUser{{$val->id}}" class="btn btn-outline-warning">Edit</a>
                </td>
        @endforeach
        </tbody>
    </table>
    <br>
    <table class="table dataTable" id="datatable">
        <thead>
        <tr>

            <th scope="col">#</th>
            <th scope="col">Owner name</th>
            <th scope="col">Vehicle Type</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Condition</th>
            <th scope="col">Issue Date</th>
            <th scope="col">Expire Date</th>


        </tr>
        </thead>
        <tbody>
        @foreach($vehicleDetails as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->owner->Name}}</td>
                <td>{{$val->VehicleType}}</td>
                <td>{{$val->Vehicle_number}}</td>
                <td><img src="categorypic/{{$val['condition']}}" alt="No image found"
                         height="80"
                         width="80"></td>
                <td>{{$val->Issue_date}}</td>
                <td>{{$val->Expire_date}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



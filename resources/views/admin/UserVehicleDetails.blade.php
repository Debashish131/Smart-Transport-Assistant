@extends('master')
@section('maincontent')
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
            <th scope="col">Actions</th>

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


                            <td><a href="/updateVehicle{{$val->id}}" class="btn btn-outline-warning">Edit</a>
                        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

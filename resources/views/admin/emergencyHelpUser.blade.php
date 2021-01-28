@extends('master')
@section('maincontent')
    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Problem</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">License Number</th>
            <th scope="col">Phone</th>
            <th scope="col">Location</th>
            <th scope="col">Approved</th>
            <th scope="col">Submit at</th>
            <th scope="col">Actions</th>


        </tr>
        </thead>

        <tbody>
        @foreach($em as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->Creator}}</td>
                <td>{{$val->Problem}}</td>
                <td>{{$val->Vehicle_num}}</td>
                <td>{{$val->License_number}}</td>
                <td>{{$val->Phone}}</td>
                <td>{{$val->Location}}</td>
                <td>
                    @if($val->Is_approved==0)
                        <span style="background-color: #bd2130;color:white">Pending</span>
                    @else
                        <span style="background-color: #00b300">Approve</span>
                    @endif
                </td>
                <td>{{$val->created_at->diffForHumans()}}</td>
                <td><a href="/dltuserEmergency/{{$val->id}}" class="btn btn-outline-danger"><i
                            class="fas fa-trash"></i></a>
                    <a href="/appEm/{{$val->id}}" class="btn btn-outline-warning"><i class="fas fa-check"></i></a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

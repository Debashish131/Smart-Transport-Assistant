@extends('officer_master')

@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Complainer Name</th>
            <th scope="col">Offence</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Location</th>
            <th scope="col">Images</th>
            <th scope="col">Date</th>
            <th scope="col">Comment</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($complain as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <th scope="row">{{$val->creator}}</th>
                <td>{{$val->offence}}</td>
                <td>{{$val->vehicle_num}}</td>
                <td>{{$val->location}}</td>
                <td><img src="categorypic/{{$val['images']}}" alt="No image found"
                         height="80"
                         width="80"></td>
                <td>{{$val->date}}</td>
                <td>{{$val->comment}}</td>
                @if($val->Is_approved==0)
                    <td><span style="color: #bd2130">Pending</span></td>
                @else
                    <td><span style="color: #00b300">Approve</span></td>
                @endif

                <td><a href="/officereditcom{{$val->id}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

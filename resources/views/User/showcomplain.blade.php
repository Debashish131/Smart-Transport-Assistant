@extends('User.master')

@section('maincontent')
    <a href="/create_complain" class="btn btn-success">Create</a>
    <br>
    <br>
    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Offence</th>
            <th scope="col">Vehicle number</th>
            <th scope="col">NID</th>
            <th scope="col">Location</th>
            <th scope="col">Image</th>
            <th scope="col">Date</th>
            <th scope="col">Comment</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($complain as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->offence}}</td>
                <td>{{$val->vehicle_num}}</td>
                <td>{{$val->nid}}</td>
                <td>{{$val->location}}</td>

                <td><img src="categorypic/{{$val['images']}}" alt="No image found"
                         height="80"
                         width="80"></td>

                <td>{{\Carbon\Carbon::parse($val['date'])->diffForHumans()}}</td>
                <td>{{$val->comment}}</td>
                <td>
                  @if($val->Is_approved==0)
                    <span style="color: #bd2130">Pending</span>
                    @else
                    <span style="color: #00b300">Approve</span>
                      @endif
                    </td>
                <td><a href="/editcomplain{{$val->id}}"  class="waves-effect btn btn-warning"><i class="mdi mdi-account-edit "></i>Edit </a>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

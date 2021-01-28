@extends('master')

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
            <th scope="col">Status</th>
            <th scope="col">Comment</th>
            <th scope="col">Submit Time</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($complain as $val )
            <tr>
                <th scope="row">{{$val->id}}</th>
                <th scope="row">{{$val->creator}}</th>
                <td>{{$val->offence}}</td>
                <td>{{$val->vehicle_num}}</td>
                <td>{{$val->location}}</td>
                <td><img src="categorypic/{{$val['images']}}" alt="No image found"
                         height="80"
                         width="80"></td>
                @if($val->Is_approved==0)
                    {{--                <td>{{$val->Is_approved}}</td>--}}
                    <td><span style="color: #bd2130">Pending</span></td>
                @else
                    <td><span style="color: #00b300">Approve</span></td>
                @endif
                {{--                <td>{{$val->date}}</td>--}}
                <td>{{$val->comment}}</td>
                <td>{{$val->created_at->diffForHumans()}}</td>
                {{--                <td><a title="Approved" id="approve" href="{{route('admin.post.approve')}}"--}}
                {{--                       class="btn btn-outline-success" id="approval"--}}
                {{--                       data-token="{{csrf_token()}}" data-id="{{$val->id}}"><i class="fas fa-check"></i></a>--}}
                <td><a href="/editcom{{$val->id}}" class="btn btn-outline-warning"><i class="fas fa-edit "></i></a>
                <td><a href="/deleteCom/{{$val->id}}/delete" class="btn btn-outline-danger"><i
                            class="fas fa-trash-alt"></i></a>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection

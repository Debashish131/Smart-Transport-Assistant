@extends('master')

@section('maincontent')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Feedback Type</th>
            <th scope="col">User Type</th>
            <th scope="col">Feedback topic</th>
            <th scope="col">Feedback Details</th>
            <th scope="col">Submitted Time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($details as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->feedbackType}}</td>
                <td>{{$val->userType}}</td>
                <td>{{$val->mainFeedback}}</td>
                <td>{{$val->detailFeedback}}</td>
                <td>{{$val->created_at->diffForHumans()}}</td>

            {{--                <td><a href="/editcomplain{{$val->id}}" class="btn btn-outline-warning">Edit</a>--}}
            {{--            </tr>--}}
        @endforeach
        </tbody>
    </table>
@endsection

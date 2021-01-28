@extends('master')
@section('mainsection')

    <table class="table dataTable" id="datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User name</th>
            <th scope="col">Penalty</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($user as $val)
            <tr>
                <th scope="row">{{$val->id}}</th>
                <td>{{$val->name}}</td>
                <td>{{$val->penalty}}</td>
                <td>{{$val->created_at->diffForHumans()}}</td>
                <td><a href="/deleteUser/{{$val->id}}/delete" class="btn btn-outline-danger">Delete</a>
        @endforeach
        </tbody>
    </table>
@endsection

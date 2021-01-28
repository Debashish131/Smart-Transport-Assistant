@extends('master')
@section('maincontent')

    <div class="col-12">
        <div class="card m-b-30">
            <h4 class="mt-0 header-title">User Emergency</h4>
            <br>

            <div class="approve">
                @if($em->Is_approved==false)
                    <form method="post" action="/emApprove/{{$em->id}}">
                        <input type="hidden" id="{{$em->id}}" name="id" value="put">
                        {{ csrf_field() }}
                        @method('POST')
                        <button class="btn btn-success pull-right" type="submit">
                            <i class="fas fa-check">Approve</i>
                        </button>
                    </form>
                @endif
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

@endsection

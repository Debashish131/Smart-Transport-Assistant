@extends('master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <h4 class="mt-0 header-title">Update user Vehicle</h4>
            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <br>
                <br>
                <form action="/updateVehicle/{{$details->id}}update" method="post" id="myForm">
                    @csrf
                    <div class="form-group row">
                        <label for="Expire_date" class="col-sm-2 col-form-label">Vehicle Expire Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="Expire_date" name="Expire_date" value="{{$details->Expire_date}}">
                        </div>
                    </div>


                    <div class="text-center m-t-15">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                    </div>

                    {{--                    <a href="/allcomplain" class="btn btn-success">Show</a>--}}
                </form>
            </div>
        </div>


    </div>


@endsection

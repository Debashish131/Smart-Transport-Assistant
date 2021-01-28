@extends('master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <h4 class="mt-0 header-title">Update user Application</h4>
            <br>
            <div class="approve">
                @if($details->Is_approved==false)
                    <form method="post" action="/licenseApprove{{$details->id}}">
                        <input type="hidden" id="{{$details->id}}" name="id" value="put">
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
            <div>
                <br>
                <br>

                <form action="/updateApplication/{{$details->id}}update" method="post" id="myForm"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Address" name="Address" value="{{$details->Address}}"
                                   required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Phone" name="Phone" value="{{$details->Phone}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Email" name="Email" value="{{$details->Email}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Expire_Date" class="col-sm-2 col-form-label">Vehicle Expire Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="Expire_Date" name="Expire_Date" value="{{$details->vehicle->Expire_Date}}">
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

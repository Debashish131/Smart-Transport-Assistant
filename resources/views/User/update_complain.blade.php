@extends('User.master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add Complain</h4>
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

                <form action="/updatecomplain{{$complain->id}}" method="post" id="myForm"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="offence" class="col-sm-2 col-form-label">Offence</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="offence" name="offence" value="{{$complain->offence}}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="location" name="location" value="{{$complain->location}}"
                                   required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="comment" name="comment" value="{{$complain->comment}}">
                        </div>
                    </div>

                    <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                    <a href="/showcomplain" class="btn btn-success">Show</a>
                </form>
            </div>
        </div>
    </div>


@endsection

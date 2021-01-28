@extends('master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <h4 class="mt-0 header-title">Give Penalty</h4>
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
                <form action="/updatePenalty{{$penalty->id}}" method="post" id="myForm"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="offence" class="col-sm-2 col-form-label">Penalty</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="penalty" name="penalty" value="{{$penalty->penalty}}">
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

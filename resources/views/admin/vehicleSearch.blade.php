@extends('master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                {{--                <h4 class="mt-0 header-title">Registration For Registration Card</h4>--}}
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

                <form action="/searchVehicle" method="post" id="myForm" >
                    @csrf
                    <div class="form-group row">
                        <h3>Search Vehicle Information</h3>
                    </div>

                    <div class="form-group row">
                        <label for="vehicle_number_search" class="col-sm-2 col-form-label">Vehicle number</label>
                        <div class="col-sm-10">
                            <input class="form-control {{$errors->has('vehicle_number_search')? 'is-invalid':''}}" type="text"
                                   id="vehicle_number_search" name="vehicle_number_search"
                                   placeholder="Enter Vehicle Number or BRTA office Code">
                            @if($errors->has('vehicle_number_search'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('vehicle_number_search')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="text-center m-t-15">
                        <button class="btn btn-warning waves-effect waves-light"  type="submit">Search</button>
                    </div>
                </form>
                <br>
                <br>
                <hr>

                <div class="container">
                    @if(isset($details))
                        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <h2>Vehicle details</h2>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Vehicle Number</th>
                                <th>Owner Name</th>
                                <th>Owner Father Name</th>
                                <th>Blood Group</th>
                                <th>Issue Date</th>
                                <th>Expire Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details as $vehicle)
                                <tr>
                                    <td>{{$vehicle->Vehicle_number}}</td>
                                    <td>{{$vehicle->owner->Name}}</td>
                                    <td>{{$vehicle->owner->FatherName}}</td>
                                    <td>{{$vehicle->owner->BloodGroup}}</td>
                                    <td>{{$vehicle->Issue_date}}</td>
                                    <td>{{$vehicle->Expire_date}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

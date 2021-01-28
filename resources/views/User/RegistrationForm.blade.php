@extends('User.master')

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

                <form action="/regRc" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <h3>Personal Information</h3>
                    </div>

                    <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control {{$errors->has('Name')? 'is-invalid':''}}" type="text"
                                   id="Name" name="Name" value="{{old('Name')}}"
                                   placeholder="Enter your Name">
                            @if($errors->has('Name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('Name')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="FatherName" class="col-sm-2 col-form-label">Father Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="FatherName" name="FatherName" value="{{old('FatherName')}}"
                                   placeholder="Enter Father Name">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="DOB" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="DOB" name="DOB" value="{{old('DOB')}}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="BloodGroup" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="BloodGroup" name="BloodGroup" value="{{old('BloodGroup')}}"
                                   placeholder="Enter Blood Group">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NID" class="col-sm-2 col-form-label">NID (National ID)</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="NID" name="NID" value="{{old('NID')}}" placeholder="Enter NID number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Occupation" class="col-sm-2 col-form-label">Occupation</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Occupation" name="Occupation" value="{{old('Occupation')}}"
                                   placeholder="Enter your occupation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-formAddress-label">Present Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Address" name="Address" value="{{old('Address')}}"
                                   placeholder="Enter Present Address ">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="PermanentAddress" class="col-sm-2 col-form-label">Permanent Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="PermanentAddress" name="PermanentAddress" value="{{old('PermanentAddress')}}"
                                   placeholder="Enter Permanent Address"
                            >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Phone" class="col-sm-2 col-form-label">Phone number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Phone" name="Phone" value="{{old('Phone')}}" data-mask="(+8801)722222222"
                                   placeholder="Enter Phone Number">
                            <span class="font-13 text-muted">(+880)-1722222222</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email"
                                   id="Email" name="Email" value="{{old('Email')}}" placeholder="Enter Email Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="EmergencyContact" class="col-sm-2 col-form-label">Emergency Contact</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="EmergencyContact" name="EmergencyContact" value="{{old('EmergencyContact')}}"
                                   placeholder="Enter your Emergency Contact">
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3>Vehicle Information</h3>
                    </div>

                    <div class="form-group row">
                        <label for="VehicleType" class="col-sm-2 col-form-label">Vehicle Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="VehicleType" name="VehicleType" >
                                <option selected disabled>Select</option>
                                <option value="Light vehicle">Light vehicle</option>
                                <option value="Medium vehicle">Medium vehicle</option>
                                <option value="Heavy vehicle">Heavy vehicle</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="BRTAoffice" class="col-sm-2 col-form-label">BRTA Office Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="BRTAoffice" name="BRTAoffice" value="{{old('BRTAoffice')}}"
                                   placeholder="Enter your BRTA office Code">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Vehicle_number" class="col-sm-2 col-form-label">Vehicle Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Vehicle_number" name="Vehicle_number" value="{{old('Vehicle_number')}}"
                                   placeholder="Enter your Vehicle number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Condition" class="col-sm-2 col-form-label">Vehicle Condition Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"
                                   id="Condition" value="{{old('condition')}}" name="Condition"
                                   placeholder="Enter image of vehicle" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="Issue_date" class="col-sm-2 col-form-label">Licence Issue Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="Issue_date" name="Issue_date" value="{{old('Issue_date')}}"
                                   placeholder="Enter your Issue date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Expire_date" class="col-sm-2 col-form-label">Licence Expire Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="Expire_date" name="Expire_date" value="{{old('Expire_date')}}"
                                   placeholder="Enter your Expire date">
                        </div>
                    </div>

                    <div class="text-center m-t-15">
                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light justify-content-center" id="alertify-error" onclick="myFunction()">Submit</button> -->
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
{{--                        <a href="/showcomplain" class="btn btn-success">Show</a></div>--}}

                </form>
            </div>
        </div>
    </div>


@endsection

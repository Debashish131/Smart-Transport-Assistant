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

                <form action="/addcomplain" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Offence</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="offence" name="offence" required>
                                <option selected disabled>Select</option>
                                <option value="NO helmate">No helmet</option>
                                <option value="Wrong Parking">Wrong parking</option>
                                <option value="Made Violance">Made violance</option>
                                <option value="Polutated Air">Air polutated so much</option>
                                <option value="No Seat Belt">No seat belt</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vehicle_num" class="col-sm-2 col-form-label">Vehicle Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="vehicle_num" name="vehicle_num" placeholder="Enter Vehicle Number" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nid" class="col-sm-2 col-form-label">NID number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="nid" name="nid" placeholder="Enter your NID Number" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="location" name="location" placeholder="Enter complaint Location name" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Capture Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"
                                   id="images" name="images" placeholder="Enter image of vehicle" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date"
                                   id="date" name="date"  timezone="[[timezone]]" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="comment" name="comment" placeholder="Enter if any comment">
                        </div>
                    </div>
                    <div class="text-center m-t-15">
                        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light justify-content-center" id="alertify-error" onclick="myFunction()">Submit</button> -->
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <a href="/showcomplain" class="btn btn-success">Show</a></div>

                </form>
            </div>
        </div>
    </div>


@endsection


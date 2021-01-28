@extends('User.master')
@section('maincontent')
    <div class="card-body">
        <h4 class="mt-0 header-title">Emergency Help</h4>
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

        <form action="/emergencyHelp" method="post" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Select Problem</label>
                <div class="col-sm-10">
                    <select class="form-control" id="Problem" name="Problem" required>
                        <option selected disabled>Select</option>
                        <option value="Vehicle stolen">Vehicle Stolen</option>
                        <option value="Lost License">Lost License</option>
                        <option value="Got injured">Got injured</option>
                        <option value="Other">Other</option>
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
                <label for="License_number" class="col-sm-2 col-form-label">License Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text"
                           id="License_number" name="License_number" placeholder="Enter License Number" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text"
                           id="Phone" name="Phone" placeholder="Enter Phone Number" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Location" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text"
                           id="Location" name="Location" placeholder="Enter Your Current Location" required>
                </div>
            </div>
            <div class="text-center m-t-15">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection

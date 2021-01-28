@extends('User.master')
@section('maincontent')
            <div class="card-body">
                <h4 class="mt-0 header-title">Feedback</h4>
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

                <form action="/storefeedback" method="post" id="feedbackForm">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">What you like to do?</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="feedbackType" name="feedbackType" required>
                                <option selected disabled>Select</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Bug">Report a bug</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">I am a</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="userType" name="userType" required>
                                <option selected disabled>Select</option>
                                <option value="User">User</option>
                                <option value="Driver">Driver</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">What's your feedback about</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="mainFeedback" name="mainFeedback" required>
                                <option selected disabled>Select</option>
                                <option value="Payment">Payment option</option>
                                <option value="Emergency">Emergency help</option>
                                <option value="Vehicle">Vehicle menu</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group row">
                        <label for="detailFeedback" class="col-sm-2 col-form-label">Tell us about more</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" type="text"
                                      id="detailFeedback" name="detailFeedback" placeholder="Please tell us more" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="text-center m-t-15">
                        <button class="btn btn-primary waves-effect waves-light " type="submit">Submit</button>
                    </div>


                </form>
            </div>
    </div>


@endsection

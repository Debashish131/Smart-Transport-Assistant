@extends('User.master')
@section('maincontent')

    <div class="card-body">
        <h4 class="mt-0 header-title">Penalty payment</h4>
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

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Type of case</label>
        <div class="col-sm-10">
            <select class="form-control" id="casetype" name="casetype" required>
                <option selected disabled>Select</option>
                <option value="Renew Vehicle License">Renew Vehicle License</option>
                <option value="No helmet">No helmet</option>
                <option value="Wrong parking">Wrong parking</option>
                <option value="Made violance">Made violance</option>
                <option value="Polutated Air">Polutated Air</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Payment Method</label>
        <div class="col-sm-10">
            <select class="form-control" id="payment" name="payment" required>
                <option selected disabled>Select payment method</option>
                <option value="Bkash">Bkash</option>
                <option value="Rocket">Rocket</option>
                <option value="Nogod">Nogod</option>
                <option value="Credit card">Credit card</option>
            </select>
        </div>
    </div>

    <div class="text-center m-t-15">
        <a href="{{url('/example1')}}" class="btn btn-warning">Next page</a>
    </div>


@endsection

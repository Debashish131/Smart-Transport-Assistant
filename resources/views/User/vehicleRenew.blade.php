@extends('User.master')
@section('maincontent')
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/applyRenew" method="post" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <h3>Application For Vehicle Renew</h3>
                    </div>

                    <div class="form-group row">
                        <label for="Vehicle_number" class="col-sm-2 col-form-label">Vehicle_number</label>
                        <div class="col-sm-10">
                            <input class="form-control {{$errors->has('Vehicle_number')? 'is-invalid':''}}" type="text"
                                   id="Vehicle_number" name="Vehicle_number" value="{{old('Vehicle_number')}}"
                                   placeholder="Enter your Vehicle Number">
                            @if($errors->has('Vehicle_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('Vehicle_number')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="Renew_year" class="col-sm-2 col-form-label">Renew year</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Renew_year" name="Renew_year">
                                <option selected disabled>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <span class="font-13 text-muted">Renew 1 year will 800tk</span><br>
                            <span class="font-13 text-muted">Renew 2 year will 1000tk</span><br>
                            <span class="font-13 text-muted">Renew 3 year will 1500tk</span><br>
                            <span class="font-13 text-muted">Renew 4 year will 2500tk</span><br>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="Payment_amount" class="col-sm-2 col-form-label">Payment amount</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Payment_amount" name="Payment_amount" value="{{old('Payment_amount')}}"
                                   placeholder="Enter Payment amount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Transaction_id" class="col-sm-2 col-form-label">Transaction ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text"
                                   id="Transaction_id" name="Transaction_id" value="{{old('Transaction_id')}}"
                                   placeholder="Enter Transaction id">
                        </div>
                    </div>


                    <div class="text-center m-t-15">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

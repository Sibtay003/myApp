@extends('layout')
@section('title')
    Customer list
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Add Customers</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">


            <form action="/customers" method="post" class="pb-5">


                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="cust_name" value="{{ old('name') }}">
                    </div>
                    <div>{{ $errors->first('name') }}</div>
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="cust_email" value="{{ old('Email') }}">
                    </div>
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label for="email">Status</label>
                    <select name="status" id="status" class="custom-select">
                        <option value="" disabled>Select option</option>
                        <option value="1"> Active </option>
                        <option value="0"> InActive </option>
                    </select>
                    <div>{{ $errors->first('active') }}</div>
                </div>

                <div class="form-group">
                    <label for="email">Company</label>
                    <select name="company_id" id="company_id" class="custom-select">
                        <option value="" disabled selected>Select company</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }} </option>
                        @endforeach
                    </select>
                    <div>{{ $errors->first('active') }}</div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Add Customer</button>

                @csrf
            </form>

        </div>
    </div>
@endsection


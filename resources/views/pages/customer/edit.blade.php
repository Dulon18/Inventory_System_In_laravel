@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Customer</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('customerList')}}">Customer</a></div>
                    <div class="breadcrumb-item"> Add Customer</div>
                </div>
            </div>
             <!-- message Show start -->
                  @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                <!-- message Show end -->
                            <div class="card">
                            <form action="{{route('customerUpdate',$customer->id)}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4 class="text-center">Update Customer Info</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$customer->name}}">
                                            <div class="invalid-feedback">
                                                Enter employee name!!
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4"  value="{{$customer->email}}">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" value="{{$customer->phone}}">
                                            <div class="invalid-feedback">
                                                Enter phone number !!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{$customer->address}}">
                                        <div class="invalid-feedback">
                                                Enter Address please !!
                                            </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  value="{{$customer->city}}">
                                            <div class="invalid-feedback">
                                                Enter city please !!
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Shop Name</label>
                                            <input type="text" name="shopname" class="form-control" id="inputCity" value="{{$customer->shopname}}" >                                   
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Account Holder</label>
                                            <input type="text" name="account_holder" class="form-control" id="inputZip" value="{{$customer->account_holder}}">           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Account Number</label>
                                                <input type="text" name="account_number" class="form-control" value="{{$customer->account_number}}">  
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control" value="{{$customer->bank_name}}">
                                              
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Bank Branch</label>
                                                <input type="text" name="bank_branch" class="form-control" value="{{$customer->bank_branch}}">
                                               
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                                                <img alt="image" src="{{url('/storage/'.$customer->image)}}" class="rounded mt-2" width="120" data-toggle="tooltip">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('customerList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Customer</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('customerList')}}">Supplier</a></div>
                    <div class="breadcrumb-item"> Add Supplier </div>
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
                            <form action="{{route('supplierUpdate',$supplier->id)}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4 class="text-center">Update Supplier Info</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$supplier->name}}">
                                            
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4"  value="{{$supplier->email}}">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" value="{{$supplier->phone}}">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{$supplier->address}}">
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  value="{{$supplier->city}}">
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Shop Name</label>
                                            <input type="text" name="shop" class="form-control" id="inputCity" value="{{$supplier->shop}}" >                                   
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Account Holder</label>
                                            <input type="text" name="account_holder" class="form-control" id="inputZip" value="{{$supplier->account_holder}}">           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                                <label>Account Number</label>
                                                <input type="text" name="account_number" class="form-control" value="{{$supplier->account_number}}">  
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control" value="{{$supplier->bank_name}}">
                                              
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Bank Branch</label>
                                                <input type="text" name="bank_branch" class="form-control" value="{{$supplier->bank_branch}}">
                                               
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Supplier Type</label>
                                        <select class="form-control select2" name="type" value="{{$supplier->type}}">                                                    
                                               <option value="{{$supplier->type}}">{{$supplier->type}}</option> 
                                               <option value="Distributor">Distributor</option>
                                              <option value="Whole Seller">Whole Seller</option>
                                               <option value="Broker">Broker</option>   
                                        </select>
                                    </div> 

                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                                                <img alt="image" src="{{url('/storage/'.$supplier->image)}}" class="rounded mt-2" width="120" data-toggle="tooltip">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('supplierList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
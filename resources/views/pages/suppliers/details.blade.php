@extends('home')
@section('content')
<section class="section">
                <div class="section-header">
                    <h1>Details</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a class="nav-link"href="{{route('supplierList')}}">Supplier</a></div>
                        <div class="breadcrumb-item">Details</div>
                    </div>
                </div>
                <div class="section-body">
                    

                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="card">
                            <img alt="image" src="{{url('/storage/'.$supplier->image)}}" class="rounded" height="380px">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">
                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Details</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$supplier->name}}" readonly>                                         
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$supplier->email}}" readonly>
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" value="{{$supplier->phone}}" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{$supplier->address}}" readonly>                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  value="{{$supplier->city}}" readonly>
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Shop Name</label>
                                            <input type="text" name="shop" class="form-control" id="inputCity" value="{{$supplier->shop}}" readonly>                                   
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Account Holder</label>
                                            <input type="text" name="account_holder" class="form-control" id="inputZip" value="{{$supplier->account_holder}}" readonly>           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Account Number</label>
                                                <input type="text" name="account_number" class="form-control" value="{{$supplier->account_number}}" readonly>  
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control" value="{{$supplier->bank_name}}" readonly>
                                              
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Bank Branch</label>
                                                <input type="text" name="bank_branch" class="form-control" value="{{$supplier->bank_branch}}" readonly>    
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Type</label>
                                        <input type="text" name="type" class="form-control" id="inputAddress" value="{{$supplier->type}}" readonly>                                    
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a type="button" href="{{route('supplierList')}}"class="btn btn-danger">Back</a>
                                        
                                    </div>
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
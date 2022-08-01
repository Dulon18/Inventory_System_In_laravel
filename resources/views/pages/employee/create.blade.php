@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Employee</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Employee</a></div>
                    <div class="breadcrumb-item"><a href="#">Add Employee</a></div>
                </div>
            </div>
             <!-- message Show start -->
                  @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                <!-- message Show end -->
                            <div class="card">
                            <form action="{{route('employeeStore')}}" class="needs-validation" novalidate="" method="PoST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4 class="text-center">Employee Form</h4>
                                </div>
                                <div class="card-body">

                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" required="" placeholder="Name">
                                            <div class="invalid-feedback">
                                                Enter employee name!!
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"  required="">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" placeholder="Phone"  required="">
                                            <div class="invalid-feedback">
                                                Enter phone number !!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"  required="">
                                        <div class="invalid-feedback">
                                                Enter Address please !!
                                            </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  required="">
                                            <div class="invalid-feedback">
                                                Enter city please !!
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Experiance</label>
                                            <input type="number" name="experience" class="form-control" id="inputCity" placeholder="Experience"  required="">
                                            <div class="invalid-feedback">
                                                Enter Experience please !!
                                            </div>                                        
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Vacation</label>
                                            <input type="text" name="vacation" class="form-control" id="inputZip"  required="">
                                            <div class="invalid-feedback">
                                                Enter Vacation please !!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>National Id Number</label>
                                                <input type="text" name="nid" class="form-control" required="" placeholder="NID">
                                                <div class="invalid-feedback">
                                                    Enter employee NID!!
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Salary</label>
                                                <input type="number" name="salary" class="form-control" required="" placeholder="Salary">
                                                <div class="invalid-feedback">
                                                    Enter employee Salary!!
                                                </div>
                                            </div>
                                    </div>
                               
                                    
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple  required="">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('employeesList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
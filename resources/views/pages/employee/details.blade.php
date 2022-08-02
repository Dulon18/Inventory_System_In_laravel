@extends('home')
@section('content')
<section class="section">
                <div class="section-header">
                    <h1>Details</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active">Employee</div>
                        <div class="breadcrumb-item">Details</div>
                    </div>
                </div>
                <div class="section-body">
                    

                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="card">
                            <img alt="image" src="{{url('/storage/'.$employee->image)}}" class="rounded" height="300px">
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
                                            <input type="text" name="name" class="form-control" value="{{$employee->name}}" readonly>                                         
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$employee->email}}" readonly>
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" value="{{$employee->phone}}" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{$employee->address}}" readonly>                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  value="{{$employee->city}}" readonly>
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Experience</label>
                                            <input type="number" name="experience" class="form-control" id="inputCity" value="{{$employee->experience}}" readonly>
                                                                                    
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Vacation</label>
                                            <input type="text" name="vacation" class="form-control" id="inputZip"  value="{{$employee->vacation}}" readonly>
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>National Id Number</label>
                                                <input type="text" name="nid" class="form-control" value="{{$employee->nid_no}}" readonly>
                                                
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Salary</label>
                                                <input type="number" name="salary" class="form-control" value="{{$employee->salary}}" readonly>                                               
                                            </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a type="button" href="{{route('employeesList')}}"class="btn btn-danger">Back</a>
                                        
                                    </div>
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
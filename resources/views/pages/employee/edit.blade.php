@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Employee</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link"  href="{{route('employeesList')}}">Employee</a></div>
                    <div class="breadcrumb-item">Update Employee Info</div>
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
                            <form action="{{route('employeeUpdate',$employee->id)}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4 class="text-center">Update Employee Info</h4>
                                </div>
                                <div class="card-body">

                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                                           
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$employee->email}}">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" value="{{$employee->phone}}">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" value="{{$employee->address}}">                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  value="{{$employee->city}}">
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Experience</label>
                                            <input type="number" name="experience" class="form-control" id="inputCity" value="{{$employee->experience}}">
                                                                                    
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Vacation</label>
                                            <input type="text" name="vacation" class="form-control" id="inputZip"  value="{{$employee->vacation}}">
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>National Id Number</label>
                                                <input type="text" name="nid" class="form-control" value="{{$employee->nid_no}}">
                                                
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Salary</label>
                                                <input type="number" name="salary" class="form-control" value="{{$employee->salary}}">
                                                
                                            </div>
                                    </div>
                               
                                    
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple  value="{{$employee->image}}">
                                                <img alt="image" src="{{url('/storage/'.$employee->image)}}" class="rounded mt-2" width="150" data-toggle="tooltip">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('employeesList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
  </div>
</section>
@endsection
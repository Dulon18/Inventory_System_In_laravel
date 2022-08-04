@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Salary</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('salaryList')}}">Salary</a></div>
                    <div class="breadcrumb-item"> Add Salary</div>
                </div>
            </div>
             <!-- message Show start -->

             @if(session()->has('error'))
                    <p class="alert alert-danger">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('error')}}</p>
                  @endif
                  
                  @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                <!-- message Show end -->
                            <div class="card">
                            <form action="{{route('salaryStore')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header bg-primary">
                                    <h4 class="text-white">Salary Form</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                                <label>Employee Name</label>
                                                <select class="form-control select2" name="emp_id"  required="">
                                                        <option>Select Employee</option>
                                                        @foreach($employees as $employee)
                                                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                       @endforeach
                                                    </select>
                                                <div class="invalid-feedback">
                                                    Enter Employee name!!
                                                </div>
                                            </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Month</label>
                                            <select class="form-control select2" name="month"  required="">
                                                        <option>Select Month</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                   
                                                    </select>
                                            <div class="invalid-feedback">
                                                Oh no! month is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Year</label>
                                            <input type="text" name="year" class="form-control" id="inputPassword4" placeholder="Year"  required="">
                                            <div class="invalid-feedback">
                                                Enter Year !!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Advanced Salary</label>
                                        <input type="text" name="advanced_salary" class="form-control" id="inputAddress" placeholder="Advanced Salary"  required="">
                                        <div class="invalid-feedback">
                                                Enter Advanced Salary please !!
                                            </div>
                                    </div>
                                   
                              
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('salaryList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
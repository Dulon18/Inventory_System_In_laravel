@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Employee</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="">Employee</a></div>
                    <div class="breadcrumb-item"><a href="">  Manage Employees</a></div>
                </div>
            </div>
            <div class="buttons">
                <a href="{{route('employeeAdd')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add New Employee </a>
            </div>
            <!-- table start -->
            <div class="section-body">        
             <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h4>Employees DataTables</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th class="text-center">#No.</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Salary</th>
                                                <th>Experience</th>
                                                <th>Vacation</th>
                                                <th>NID</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employees as $key=>$employee)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$employee->name}}</td>
                                                <td>{{$employee->address}}</td>
                                                <td>{{$employee->city}}</td>
                                                <td>{{$employee->salary}}</td>
                                                <td>{{$employee->experience}}</td>
                                                <td>{{$employee->vacation}}</td>
                                                <td>{{$employee->nid_no}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phone}}</td>

                                                <td>
                                                    <img alt="image" src="{{url('/storage/'.$employee->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$employee->name}}">
                                                </td>
                                                <td>
                                                <a href="#" class="btn btn-secondary">Details</a>
                                                <a href="#" class="btn btn-info">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                                
                                                </tr>  
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- table end -->


</section>

@endsection
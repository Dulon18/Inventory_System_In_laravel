@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Employee</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Employee</a></div>
                    <div class="breadcrumb-item"> Manage Employees</div>
                </div>
            </div>
            <!-- message Show start -->
            @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                <!-- message Show end -->           

            <!-- table start -->
            <div class="section-body">        
             <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="buttons m-3">
                                    <a href="{{route('employeeAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Employee </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th class="text-center">#No.</th>
                                                <th>Name</th>
                                                <th>Address</th>                                           
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
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phone}}</td>

                                                <td>
                                                    <img alt="image" src="{{url('/storage/'.$employee->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$employee->name}}">
                                                </td>
                                                <td>
                                                <a href="{{route('employeeDetails',$employee->id)}}" class="btn btn-secondary">Details</a>
                                                <a href="{{route('employeeEdit',$employee->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('employeeDelete',$employee->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Salary</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('salaryList')}}">Salary</a></div>
                    <div class="breadcrumb-item"> Manage Salary</div>
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
                                    <a href="{{route('salaryAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Salary </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th class="text-center">#No.</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Month</th>
                                                <th>Year</th> 
                                                <th>Salary</th>                                            
                                                <th>Advanced Money</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($salaries as $key=>$salary)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$salary->name}}</td>
                                                <td>
                                                <img alt="image" src="{{url('/storage/'.$salary->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$salary->name}}">
                                                </td>
                                                <td>{{$salary->month}}</td>
                                                <td>{{$salary->year}}</td>
                                                <td>{{$salary->salary}}</td>                                             
                                                <td>{{$salary->advanced_salary}}</td>                                        
                                                <td>
                                                <a href="{{route('salaryDetails',$salary->id)}}" class="btn btn-secondary">Details</a>
                                                <a href="{{route('salaryEdit',$salary->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('salaryDelete',$salary->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
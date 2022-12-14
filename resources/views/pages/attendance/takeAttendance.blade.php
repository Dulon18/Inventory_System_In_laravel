@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Attendance</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Attendance</a></div>
                    <div class="breadcrumb-item"> Take Attendance</div>
                </div>
            </div>
            <!-- message Show start -->
            @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                  @if(session()->has('error'))
                  <p class="alert alert-danger">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('error')}}</p>
                 @endif
                <!-- message Show end -->           

            <!-- table start -->
            <div class="section-body">        
             <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <a type="button" href="{{route('attendanceList')}}"class="btn btn-danger">Back</a>
                                            <h5 class="text-right m-3">Today : {{date("l jS \of F Y || h:i:s A")}}</h5>
                                        <table class="table table-striped v_center" >
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Photo</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <form action="{{route('attendanceStore')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                             @foreach($employees as $key=>$employee)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$employee->name}}</td>
                                                <td>
                                                    <img alt="image" src="{{url('/storage/'.$employee->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$employee->name}}">
                                                </td>
                                                <input type="hidden" name="emp_id[]" value="{{$employee->id}}">
                                                <td>
                                                        <input type="radio" name="attendance[{{$employee->id}}]" value="present" required> Present
                                                        <input type="radio" name="attendance[{{$employee->id}}]" value="absence" required> Absence
                                                </td>                  
                                                
                                                <input type="hidden" name="attendance_date"value="{{date('d/m/y')}}">
                                                <input type="hidden" name="attendance_year"value="{{date('Y')}}">
                                                </tr>  
                                                @endforeach

                                          
                                            </tbody>
                                        </table>
                                        <div class="text-right">
                                                <button type="submit" class="btn btn-success">Submit Attendance</button>
                                        </div>
                                       
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- table end -->


</section>

@endsection
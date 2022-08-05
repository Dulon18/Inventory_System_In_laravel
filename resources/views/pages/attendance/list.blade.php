@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Product Category</a></div>
                    <div class="breadcrumb-item">Category</div>
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
                                    <a href="{{route('attendanceTake')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Attendance </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($all_attendance as $key=>$attendance)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$attendance->edit_date}}</td>  
                                                <td>
                                                <a href="{{route('attendanceEdit',$attendance->edit_date)}}" class="btn btn-info">Edit</a>
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
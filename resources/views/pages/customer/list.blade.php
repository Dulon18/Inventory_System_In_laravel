@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Customer</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Customer</a></div>
                    <div class="breadcrumb-item"> Manage Customer</div>
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
                                    <a href="{{route('customerAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Customer </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Address</th>                                           
                                                <th class="text-white">Email</th>
                                                <th class="text-white">Phone</th>
                                                <th class="text-white">Photo</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($customers as $key=>$customer)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->address}}</td>                                            
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->phone}}</td>

                                                <td>
                                                    <img alt="image" src="{{url('/storage/'.$customer->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$customer->name}}">
                                                </td>
                                                <td>
                                                <a href="{{route('customerDetails',$customer->id)}}" class="btn btn-secondary">Details</a>
                                                <a href="{{route('customerEdit',$customer->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('customerDelete',$customer->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
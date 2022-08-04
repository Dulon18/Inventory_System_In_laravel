@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Customer</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Supplier</a></div>
                    <div class="breadcrumb-item"> Manage Supplier</div>
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
                                    <a href="{{route('supplierAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Supplier </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1 text-">
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Type</th>
                                                <th class="text-white">City</th>                                           
                                                <th class="text-white">Email</th>
                                                <th class="text-white">Phone</th>
                                                <th class="text-white">Photo</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($suppliers as $key=>$supplier)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$supplier->name}}</td>
                                                <td>{{$supplier->type}}</td>
                                                <td>{{$supplier->city}}</td>                                            
                                                <td>{{$supplier->email}}</td>
                                                <td>{{$supplier->phone}}</td>

                                                <td>
                                                    <img alt="image" src="{{url('/storage/'.$supplier->image)}}" class="rounded-circle" width="50" data-toggle="tooltip" title="{{$supplier->name}}">
                                                </td>
                                                <td>
                                                <a href="{{route('supplierDetails',$supplier->id)}}" class="btn btn-secondary">Details</a>
                                                <a href="{{route('supplierEdit',$supplier->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('supplierDelete',$supplier->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Product</a></div>
                    <div class="breadcrumb-item">Product List</div>
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
                                    <a href="{{route('productAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Product </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Category</th> 
                                                <th class="text-white">Warehouse</th>
                                                <th class="text-white">Selling Price</th> 
                                                <th class="text-white">Supplier</th>                                          
                                                <th class="text-white">Photo</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $key=>$product)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category->name}}</td>                                            
                                                <td>{{$product->product_warehouse}}</td>
                                                <td>{{$product->selling_price}}</td>
                                                <td>{{$product->supplier->name}}</td>
                                                <td>
                                                    <img alt="image" src="{{url('/storage/products/'.$product->product_image)}}" class="rounded" width="70" data-toggle="tooltip" title="{{$product->name}}">
                                                </td>
                                                <td>
                                                <a href="{{route('productDetails',$product->id)}}" class="btn btn-secondary">Details</a>
                                                <a href="{{route('productEdit',$product->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('productDelete',$product->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
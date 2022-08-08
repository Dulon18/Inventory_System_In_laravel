@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('customerList')}}">Product</a></div>
                    <div class="breadcrumb-item"> Add Product</div>
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
                            <form action="{{route('productUpdate',$product->id)}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4 class="text-center">Product Info Update</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <select value="{{$product->category_id}}" class="form-control select2" name="cat_id"  required="">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}"
                                                            <?php if($product->category_id == $category->id)
                                                            {echo "selected";}?>
                                                            >{{$category->name}}</option>
                                                       @endforeach
                                                    </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Supplier</label>
                                            <select value="{{$product->supplier_id}}" class="form-control select2" name="sup_id"  required="">       
                                                        @foreach($suppliers as $supplier)
                                                            <option value="{{$supplier->id}}"
                                                            <?php if($product->supplier_id == $supplier->id)
                                                            {echo "selected";}?>>
                                                                {{$supplier->name}}</option>
                                                       @endforeach
                                                    </select>
                                        </div>
                                    </div>
                               
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="inputCity" value="{{$product->product_code}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Product Route</label>
                                            <input type="text" name="route" class="form-control" id="inputCity" value="{{$product->product_route}}">                                    
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputZip">Ware House</label>
                                            <input type="text" name="warehouse" class="form-control" id="inputZip" value="{{$product->product_warehouse}}">           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Buying Price</label>
                                                <input type="text" name="buying_price" class="form-control"value="{{$product->buying_price}}">  
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Selling Price</label>
                                                <input type="text" name="selling_price" class="form-control" value="{{$product->selling_price}}">  
                                            </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Buy Date</label>
                                                <input type="date" name="buying_date" class="form-control"value="{{$product->buy_date}}">  
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Expire Date</label>
                                                <input type="date" name="expire_date" class="form-control" value="{{$product->expire_date}}">
                                            </div>   
                                      </div>
                                    
                                         
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                                                <img alt="image" src="{{url('/storage/products/'.$product->product_image)}}" class="rounded mt-2" width="120" data-toggle="tooltip">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('productList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
            </div>
</section>
@endsection
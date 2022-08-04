@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('productList')}}">Product</a></div>
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
                            <form action="{{route('productStore')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header bg-primary">
                                    <h4 class="text-white ">Product Form</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" required="" placeholder=" Product Name">
                                            <div class="invalid-feedback">
                                                Enter employee name!!
                                            </div>
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <select class="form-control select2" name="cat_id"  required="">
                                                        <option>Select Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                       @endforeach
                                                    </select>

                                            <div class="invalid-feedback">
                                                Oh no! category is required!!...
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Supplier</label>
                                            <select class="form-control select2" name="sup_id"  required="">
                                                        <option>Select Supplier</option>
                                                        @foreach($suppliers as $supplier)
                                                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                       @endforeach
                                                    </select>

                                            <div class="invalid-feedback">
                                                Oh no! supplier is required !!...
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="inputCity"  required="" placeholder="Product Code">
                                            <div class="invalid-feedback">
                                                Enter product code please !!
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Product Route</label>
                                            <input type="text" name="route" class="form-control" id="inputCity" placeholder="Product Route">                                    
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputZip">Ware House</label>
                                            <input type="text" name="warehouse" class="form-control" id="inputZip" placeholder="Ware House">           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Buying Price</label>
                                                <input type="text" name="buying_price" class="form-control" placeholder="Buying Price">  
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Selling Price</label>
                                                <input type="text" name="selling_price" class="form-control" placeholder="Selling Price">  
                                            </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label>Buy Date</label>
                                                <input type="date" name="buying_date" class="form-control" placeholder="Buy Date">  
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Expire Date</label>
                                                <input type="date" name="expire_date" class="form-control" placeholder="Expire Date">
                                              
                                            </div>   
                                    </div>
                                         
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple" multiple  required="">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('productList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                </form>
            </div>
</section>
@endsection
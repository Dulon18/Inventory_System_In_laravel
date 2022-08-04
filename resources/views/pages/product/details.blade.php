@extends('home')
@section('content')
<section class="section">
                <div class="section-header">
                    <h1>Details</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a class="nav-link"href="{{route('customerList')}}">Product</a></div>
                        <div class="breadcrumb-item">Details</div>
                    </div>
                </div>
                <div class="section-body">
                    

                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="card">
                            <img alt="image" src="{{url('/storage/products/'.$product->product_image)}}" class="rounded" height="380px">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">
                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Details</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$product->name}}" readonly>
                                        </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <input  value="{{$product->category->name}}" class="form-control select2" name="cat_id"  readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Supplier</label>
                                            <input value="{{$product->supplier->name}}" class="form-control select2" name="sup_id"  readonly>       
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="inputCity" value="{{$product->product_code}}"readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Product Route</label>
                                            <input type="text" name="route" class="form-control" id="inputCity" value="{{$product->product_route}}" readonly>                                    
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputZip">Ware House</label>
                                            <input type="text" name="warehouse" class="form-control" id="inputZip" value="{{$product->product_warehouse}}" readonly>           
                                        </div>
                                    </div>
                                 
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label>Buying Price</label>
                                                    <input type="text" name="buying_price" class="form-control"value="{{$product->buying_price}}" readonly>  
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Selling Price</label>
                                                    <input type="text" name="selling_price" class="form-control" value="{{$product->selling_price}}" readonly>  
                                                </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label>Buy Date</label>
                                                    <input type="date" name="buying_date" class="form-control"value="{{$product->buy_date}}" readonly>  
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Expire Date</label>
                                                    <input type="date" name="expire_date" class="form-control" value="{{$product->expire_date}}" readonly>
                                                </div>   
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a type="button" href="{{route('productList')}}"class="btn btn-danger">Back</a>
                                        
                                    </div>
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
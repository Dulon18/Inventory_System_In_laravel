@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Point Of Sales</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Today:  {{date('d M Y')}}</div>
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
                <div class="text-right">
                <a href="{{route('orderPending')}}" class="btn btn-success">Pending List</a>
                </div>
           
                    <div class="row mt-sm-4">
                            <!--  total calculation start-->
                            
                            <div class="col-12 col-md-12 col-lg-5">
                            <div class="card profile-widget">
                            <h4 class="text-center bg-primary m-3 p-2 text-white"> Cart </h4>
                        <div class="pricing pricing-highlight m-3">  
                            <div class="pricing-padding">
                                <div class="pricing-details">
                                    <div class="pricing-item">
                                     
                                      <div class="table-responsive">
                                        <table class="table table-striped v_center">
                                          <thead class="bg-primary">
                                            <tr>
                                              <th class="text-white">Name</th>
                                              <th class="text-white">Qty</th>
                                              <th class="text-white">Price</th>
                                              <th class="text-white">Sub Total</th>
                                              <th class="text-white">Action</th>
                                            </tr>
                                          </thead>
                                          @php 
                                          $cart=Cart::content()
                                          @endphp
                                          <tbody>
                                            @foreach($cart as $key=>$row)
                                            <tr>
          
                                              <td>{{$row->name}}</td>
                                              <td>
                                                <form action="{{route('updateCart',$row->rowId)}}" class="needs-validation" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="d-flex ms-1"> 
                                                <input type="number" name="qty" value="{{$row->qty}}" style="width:50px; border:1px solid 4">
                                                <button class="btn outline-btn-light" ><i class='fas fa-check' style='font-size:20px;color:orange;'></i></button>
                                                </div>
                                                </form>
                                            </td>
                                              <td>{{$row->price}}</td>
                                              <td>{{$row->price * $row->qty}}</td>
                                              <td>
                                                <a href="{{route('removeCart',$row->rowId)}}"> <i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></a>
                                               </td>
                                            </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>    
                                </div>
                            <div class="pricing-cta">
                              <div class="text-right">
                                <p>Subtotal : {{Cart::subtotal()}} </p>
                                <p>Quantity : {{Cart::count()}} </p>
                                <p>VAT : {{Cart::tax()}}</p>
                                <h3 class="bg-primary text-white p-3">Total : {{Cart::total()}} BDT</h3>
                              </div>
                              <form action="{{route('createInvoice')}}" class="needs-validation" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="profile-widget-description">
                                    <div class="profile-widget-name">Customer 
                                        <div class="text-muted d-inline font-weight-normal">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                         <div class="buttons text-right">
                                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                               Add New
                                        </button>
                                        @php 
                                        $customers=DB::table('customers')->get();
                                        @endphp
                                         </div>
                                         @if ($errors->any())
                                                <div class="alert alert-danger "> <button type="button" class="close" data-bs-dismiss="alert">x</button>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <select class="form-control" name="cus_id">
                                            <option aria-readonly="">Select Customer</option>
                                            @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach
                                           
                                        </select>
                                        
                                    </div>                                    
                              <button type="submit" class="btn btn-success">Create Invoice</button>
                              </form>                             
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
<!-- -----------------------------   -->
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">                              
                                    <div class="card-header">
                                        <h4>Product</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center" id="table-1">
                                            <thead>
                                                <th></th>
                                              <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Product Code</th>
                                            </thead>                        
                                         <tbody>
                                         @foreach($products as $product)
                                            <tr>
                                                <form action="{{route('addCart')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                                        @csrf 
                                                            <input type="hidden" name="id" value="{{ $product->id}}">
                                                            <input type="hidden" name="name" value="{{ $product->name}}">
                                                            <input type="hidden" name="qty" value="1">
                                                            <input type="hidden" name="price" value="{{ $product->selling_price}}">
                                                            <input type="hidden" name="weight" value="500">
                                                        <td>
                                                            <button type="submit" class="btn"><i class="fa fa-plus-circle px-2"  style="font-size:24px"></i></button>
                                                        </td>
                                                        <td>
                                                        <img alt="image" src="{{url('/storage/products/'.$product->product_image)}}" class="rounded" width="70" data-toggle="tooltip" title="{{$product->name}}">
                                                        </td>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->category->name}}</td> 
                                                        <td>{{$product->product_code}}</td> 
                                                </form>
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
<!-- modal start here---------------------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form action="{{route('customerStore')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-header bg-primary text-white text-center">
                            <h5 class="modal-title mb-2">Customer Details</h5>
                            <button class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                               <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" required="" placeholder="Name">
                                            <div class="invalid-feedback">
                                                Enter employee name!!
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"  required="">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                               </div>
                                          
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main"  required="">
                                        <div class="invalid-feedback">
                                                Enter Address please !!
                                            </div>
                                    </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4" placeholder="Phone"  required="">
                                            <div class="invalid-feedback">
                                                Enter phone number !!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" name="city" class="form-control" id="inputCity"  required="">
                                            <div class="invalid-feedback">
                                                Enter city please !!
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Shop Name</label>
                                            <input type="text" name="shopname" class="form-control" id="inputCity" placeholder="Shop Name"  required="">
                                            <div class="invalid-feedback">
                                                Enter Shop name please !!
                                            </div>                                    
                                        </div>
                                    </div>

                                    <div class="form-row">
                                          <div class="form-group col-md-6">
                                                  <label>Account Number</label>
                                                  <input type="text" name="account_number" class="form-control" placeholder="Account Number"  required="">
                                                  <div class="invalid-feedback">
                                                Enter Account number please !!
                                            </div>  
                                              </div>
                                              <div class="form-group col-md-6">
                                              <label for="inputZip">Account Holder</label>
                                              <input type="text" name="account_holder" class="form-control" id="inputZip" placeholder="Account Holder Name"  required="">
                                              <div class="invalid-feedback">
                                                Enter Account holder name please !!
                                            </div>           
                                          </div>
                                    </div>
                                   
                                    <div class="form-row">
                                         <div class="form-group col-md-6">
                                                <label>Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control" placeholder="Bank name"  required="">
                                                <div class="invalid-feedback">
                                                Enter Bank name please !!
                                            </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Bank Branch</label>
                                                <input type="text" name="bank_branch" class="form-control" placeholder="Bank Branch"  required="">
                                                <div class="invalid-feedback">
                                                Enter Bank Branch please !!
                                            </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="image" type="file" id="formFileMultiple image" multiple  required=""
                                                onchange="readURL(this);">
                                                <div class="invalid-feedback">
                                                Image is required !!
                                            </div>
                                                <img  id="image" src="#" class="img-responsive m-3" alt=" Upload image">  
                                        </div>
                                        </div>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                            </div>
                        </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
<script>
    function readURL(input){
        if(input.files && input.files[0])
        {
            var reader =new FileReader();
            reader.onload=function(e){
                $('#image').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!-- modal end here----------------------->
@endsection
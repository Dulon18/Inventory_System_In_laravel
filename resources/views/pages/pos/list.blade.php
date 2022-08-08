@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Point Of Sales</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">POS</a></div>
                    <div class="breadcrumb-item"> Manage POS</div>
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
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="card profile-widget">
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
                                         </div>
                                        <select class="form-control">
                                            <option>Select Customer</option>
                                            @foreach($customers as $customer)
                                            <option>{{$customer->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">
                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Product</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center" id="table-1">
                                            <thead>
                                              <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Product Code</th>
                                            </thead>                        
                                         <tbody>
                                         @foreach($products as $product)
                                            <tr>
                                                <td>
                                                <a href=""></a><i class="fa fa-plus-circle px-2"  style="font-size:24px"></i>
                                                <img alt="image" src="{{url('/storage/products/'.$product->product_image)}}" class="rounded" width="70" data-toggle="tooltip" title="{{$product->name}}">
                                                   </td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category->name}}</td> 
                                                <td>{{$product->product_code}}</td> 
                                            </tr>     
                                            @endforeach

                                         </tbody>
                                        </table>
                                    </div>
                                </div>
                                </form>
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
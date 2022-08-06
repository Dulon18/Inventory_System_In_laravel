@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link"  href="#">Setting</a></div>
                    <div class="breadcrumb-item">Update Setting Info</div>
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
                            <form action="{{route('settingUpdate')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4 class="text-center">Update Setting Info</h4>
                                </div>
                                <div class="card-body">

                                <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="c_name" class="form-control" value="{{$setting->Company_name}}">  
                                        </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Company Email</label>
                                            <input type="email" name="c_email" class="form-control" id="inputEmail4" value="{{$setting->Company_email}}">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Company Phone</label>
                                            <input type="text" name="c_phone" class="form-control" id="inputPassword4" value="{{$setting->Company_phone}}">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Comapny Address</label>
                                        <input type="text" name="c_address" class="form-control" id="inputAddress" value="{{$setting->Company_address}}">                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Company City</label>
                                            <input type="text" name="c_city" class="form-control" id="inputCity"  value="{{$setting->Company_city}}">
                                          
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Company Country</label>
                                            <input type="text" name="country" class="form-control" id="inputCity" value="{{$setting->Company_country}}">
                                                                                    
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Company Zip code</label>
                                            <input type="text" name="zip" class="form-control" id="inputZip"  value="{{$setting->Company_zipcode}}">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Image</label>
                                                <input class="form-control" name="logo" type="file" id="formFileMultiple" multiple  value="{{$setting->Company_logo}}">
                                                <img alt="image" src="{{url('/storage/logo/'.$setting->Company_logo)}}" class="rounded mt-2" width="150" data-toggle="tooltip">
                                        </div>
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
  </div>
</section>
@endsection
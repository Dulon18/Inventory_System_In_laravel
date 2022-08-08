@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Import</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('productList')}}">Product</a></div>
                    <div class="breadcrumb-item"> Import File</div>
                </div>
            </div>
             <!-- message Show start -->
                  @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif

                  @if(session()->has('error'))
                    <p class="alert alert-danger">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('error')}}</p>
                  @endif
                <!-- message Show end -->
                            <div class="card">
                            <form action="{{route('Import')}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header">
                                    <h4 class="text-center">Import info Update</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Import File</label>
                                            <input type="file" name="import_file" class="form-control">
                                        </div>
                                <div class="card-footer">
                                        <a type="button" href="{{route('productList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Upload file</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
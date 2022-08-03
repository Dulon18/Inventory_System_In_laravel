@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="{{route('categoryList')}}">Category</a></div>
                    <div class="breadcrumb-item"> Edit Category</div>
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
                            <form action="{{route('categoryUpdate',$category->id)}}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h4 class="text-center">Category info Update</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$category->name}}">

                                        </div>
                                <div class="card-footer text-right">
                                        <a type="button" href="{{route('categoryList')}}"class="btn btn-danger">Back</a>
                                        <button class="btn btn-primary">Save Change</button>
                                    </div>
                            </div>
                </form>
                        </div>
</section>
@endsection
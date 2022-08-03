@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Product Category</a></div>
                    <div class="breadcrumb-item">Category</div>
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
                                    <a href="{{route('categoryAdd')}}" class="btn btn-primary text-right"><i class="fas fa-plus-circle"></i> Add New Category </a>      
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th>#No.</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $key=>$Category)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$Category->name}}</td>  
                                                <td>
                                                <a href="{{route('categoryEdit',$Category->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('categoryDelete',$Category->id)}}" class="btn btn-danger" id="swal-6">Delete</a>
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
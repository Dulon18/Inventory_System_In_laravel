@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Employee</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Employee</a></div>
                    <div class="breadcrumb-item"><a href="#">Add Employee</a></div>
                </div>
            </div>
            <div class="card">
                                <form class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Add New </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Enter employee name!!
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required="">
                                            <div class="invalid-feedback">
                                              Oh no! Email is invalid.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's employee City?
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's employee address?
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's employee address?
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                        
                                      
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
</section>
@endsection
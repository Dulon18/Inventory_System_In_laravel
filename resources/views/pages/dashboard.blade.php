@extends('home')
@section('content')
@if(session()->has('message'))
                <p class="alert alert-success">
                    {{session()->get('message')}}
                </p>
            @endif
<section class="section">
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Customer</h4>
                                </div>
                                <div class="card-body">
                                    {{$count['customer']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Employee</h4>
                                </div>
                                <div class="card-body">
                                {{$count['employee']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Supplier</h4>
                                </div>
                                <div class="card-body">
                                {{$count['supplier']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Product</h4>
                                </div>
                                <div class="card-body">
                                {{$count['product']}}
                                </div>
                            </div>
                        </div>
                    </div>                  

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Order</h4>
                                </div>
                                <div class="card-body">
                                {{$count['order']}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pending Order</h4>
                                </div>
                                <div class="card-body">
                                {{$pendingOrder}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Order Deliverd</h4>
                                </div>
                                <div class="card-body">
                                {{$deliveredOrder}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistics</h4>
                                <div class="card-header-action">
                                {{-- <button class="btn btn-sm btn-outline-secondary mr-1" id="one_month">1M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="six_months">6M</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="one_year" class="active">1Y</button>
                                    <button class="btn btn-sm btn-outline-secondary mr-1" id="ytd">YTD</button>
                                    <button class="btn btn-sm btn-outline-secondary" id="all">ALL</button> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="statistic-details mb-sm-4">
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>%</span>
                                        <div class="detail-value">{{$today}}</div>
                                        <div class="detail-name">Today's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span>%</span>
                                        <div class="detail-value">{{$yesterday}}</div>
                                        <div class="detail-name">This Yesterday's Sales</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span>%</span>
                                        <div class="detail-value">{{$lastWeek}} BDT</div>
                                        <div class="detail-name">This Week's Sales amount </div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>%</span>
                                        <div class="detail-value">{{$data}} BDT</div>
                                        <div class="detail-name">This Month's Sales amount</div>
                                    </div>
                                    <div class="statistic-details-item">
                                        <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                                        <div class="detail-value">{{$data}} BDT</div>
                                        <div class="detail-name">This Year's Sales amount</div>
                                    </div>
                                </div>
                                <div id="apex-timeline-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
 
            </section>
@endsection
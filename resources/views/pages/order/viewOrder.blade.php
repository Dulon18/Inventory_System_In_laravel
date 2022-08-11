@extends('home')
@section('content')

        <section class="section">
            <div class="section-header">
                <h1>Order</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Order Details</div>
                </div>
            </div>              
            <!-- message Show start -->
              @if(session()->has('success'))
                    <p class="alert alert-success">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('success')}}</p>
                  @endif
                    <!-- message Show start -->
                    @if(session()->has('error'))
                    <p class="alert alert-danger">
                      <button type="button" class="close" data-bs-dismiss="alert">x</button>
                      {{session()->get('error')}}</p>
                  @endif
                <!-- message Show end -->
                <!-- message Show end -->
            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Details Info</h2>

                                    <div class="invoice-number">Order #{{$order->id}}
                                       
                                    </div>
                                   
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Billed To:{{$order->name}}</strong><br>
                                           
                                            {{$order->address}}<br>
                                            {{$order->city}}<br>
                                            {{$order->phone}}<br>
                                      
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <p class="badge badge-primary">{{$order->order_status}}</p>
                                        <address>
                                            
                                            <strong>Shipped To:  {{$order->name}}</strong><br>
                                           
                                            {{$order->address}},  {{$order->city}}<br>
                                            Phone: {{$order->phone}}<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                           {{$order->order_date}}<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Order Summary</div>
                                <p class="section-lead">All items here cannot be deleted.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Product Name</th>
                                            <th class="text-center">Product Code</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        @php 
                                        $no=1;
                                        @endphp 
                                        @foreach($order_details as $con)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$con->name}}</td>
                                            <td  class="text-center">{{$con->product_code}}</td>
                                            <td class="text-center">{{$con->unitcost}}</td>
                                            <td class="text-center">{{$con->quantity}}</td>
                                            <td class="text-right">{{$con->unitcost * $con->quantity}}</td>
                                        </tr>
                                     @endforeach
                                      
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <h3>Payment </h3>
                                        <h5> Payment Status : {{$order->payment_status}}</h5>
                                        <h6>Pay : {{$order->pay}} BDT</h6>
                                        <h6>Due : {{$order->due}} BDT</h6>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">{{$order->sub_total}} BDT</div>
                                        </div>
                                        @php 
                                        $shipping =100;                                    
                                        @endphp
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">VAT(21%)</div>
                                            <div class="invoice-detail-value">{{$order->vat}} BDT</div>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">{{$order->total}} BDT</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        @if($order->order_status =='approved')
                        <a href="{{route('approveList')}}" class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i>Cancel</a>
                        <button class="btn btn-warning btn-icon icon-left" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                        @else
                        <a href="{{route('orderPending')}}" class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i>Cancel</a>
                        <button class="btn btn-warning btn-icon icon-left" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                        <a href="{{route('orderDone',$order->id)}}" type="submit" class="btn btn-primary btn-icon icon-left" ><i class="fas fa-credit-card"></i>Done</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

@endsection
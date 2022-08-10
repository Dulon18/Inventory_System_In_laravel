@extends('home')
@section('content')

        <section class="section">
            <div class="section-header">
                <h1>Invoice</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Invoice</div>
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
                                    <h2>Invoice</h2>
                                    @php 
                                    $order=DB::table('orders')->where('id')->first();
                                    @endphp
                                    <div class="invoice-number">Order #{{$order++}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Billed To:{{$customer->name}}</strong><br>
                                           
                                            {{$customer->address}}<br>
                                            {{$customer->city}}<br>
                                            {{$customer->phone}}<br>
                                      
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Shipped To:  {{$customer->name}}</strong><br>
                                           
                                            {{$customer->address}},  {{$customer->city}}<br>
                                            Phone: {{$customer->phone}}<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                           {{date('dD/M/Y')}}<br><br>
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
                                            <th>Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        @php 
                                        $no=1;
                                        @endphp 
                                        @foreach($content as $con)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$con->name}}</td>
                                            <td class="text-center">{{$con->price}}</td>
                                            <td class="text-center">{{$con->qty}}</td>
                                            <td class="text-right">{{$con->price * $con->qty}}</td>
                                        </tr>
                                     @endforeach
                                      
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">{{Cart::subtotal()}}</div>
                                        </div>
                                        @php 
                                        $shipping =100;                                    
                                        @endphp
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">VAT(21%)</div>
                                            <div class="invoice-detail-value">{{Cart::tax()}}</div>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">{{ Cart::total()}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <a href="{{route('posList')}}" class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</a>
                        <button class="btn btn-warning btn-icon icon-left" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                        <button type="submit" class="btn btn-primary btn-icon icon-left" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-credit-card"></i> Process Payment</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- modal start here---------------------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form action="{{route('invoiceStore')}}" class="needs-validation" novalidate="" method="POST">
                      @csrf
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title mb-2">Payment Process Details</h5>
                            <button class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="modal-body">
                        <h5 class="text-right">Total : {{Cart::Total()}}</h5>
                        <div class="form-group">
                                        <label for="inputAddress">Payment Process</label>
                                        <select class="form-select" aria-label="Default select example" name="payment_status">
                                            <option value="Hand Cash">Hand Cash</option>
                                            <option value="Cheque">Cheque</option>
                                            <option value="Due">Due</option>
                                            </select>
                                    </div>
                                 <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Pay Amount</label>
                                            <input type="text" name="pay" class="form-control" id="inputPassword4" placeholder="Pay">
                                         
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Due Amount</label>
                                            <input type="text" name="due" class="form-control" id="inputPassword4" placeholder="Due">
                                        </div>
                                    </div>       
                                </div>

                                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                <input type="hidden" name="order_date" value="{{date('d-m-y')}}">
                                <input type="hidden" name="order_status" value="pending">
                                <input type="hidden" name="total_product" value="{{Cart::count()}}">
                                <input type="hidden" name="sub_total" value="{{Cart::subtotal()}}">
                                <input type="hidden" name="vat" value="{{Cart::tax()}}">
                                <input type="hidden" name="sub_total" value="{{Cart::subtotal()}}">
                                <input type="hidden" name="total" value="{{Cart::total()}}">

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
@endsection
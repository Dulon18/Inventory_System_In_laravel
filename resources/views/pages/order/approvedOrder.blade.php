@extends('home')
@section('content')
<section class="section">
            <div class="section-header">
                <h1>Orders</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a class="nav-link" href="#">Orders</a></div>
                    <div class="breadcrumb-item"> Pending Order</div>
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
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="table-1">
                                            <thead class="bg-primary">
                                                <tr>
                                                <th class="text-white">#No.</th>
                                                <th class="text-white"> Customer Name</th>
                                                <th class="text-white">Date</th>                                           
                                                <th class="text-white">Total Product</th>
                                                <th class="text-white">Total</th>
                                                <th class="text-white">Payment Status</th>
                                                <th class="text-white">Order Status</th>
                                                <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($approved as $key=>$order)
                                                <tr>
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>{{$order->name}}</td>
                                                <td>{{$order->order_date}}</td>                                            
                                                <td>{{$order->total_product}}</td>
                                                <td>{{$order->total}}</td>
                                                <td>{{$order->payment_status}}</td>
                                                <td class="badge badge-success mt-2">{{$order->order_status}}</td>
                                                <td>
                                                <a href="{{route('viewOrder',$order->id)}}" class="btn btn-secondary">View</a>
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
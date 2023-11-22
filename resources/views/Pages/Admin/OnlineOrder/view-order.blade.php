@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <div class="col p-md-0">
                <h4>Hello, <span>Welcome here</span></h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a>
                    </li>
                    <li class="breadcrumb-item active">Basic</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order</h4>

                        <table class="table table-bordered" id="order-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> Name </th>
                                <th> Price </th>
                                <th> Discount </th>
                                <th> Quantity </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $totalAmount = 0;
                            @endphp
                            @foreach($order as $index => $product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['price'] }}</td>
                                    <td>{{ $product['discount'] ?? 0 }}</td>
                                    <td>{{ $product['quantity'] }}</td>
                                </tr>
                                @php
                                    $price = $product['price'] - $product['discount'];
                                    $allQty = $price * $product['quantity'];
                                    $totalAmount = $totalAmount + $allQty;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>

                        <div style="color: #353535 !important;">
                            <strong>Delivery Details :-</strong> <br>
                            <strong>Name</strong> : {{ $address->name }} <br>
                            <strong>Mobile</strong> : {{ $address->mobile }} <br>
                            <strong>Address</strong> : {{ $address->address }} <br>
                            <strong>City</strong> : {{ $address->city }} <br>
                            <strong>State</strong> : {{ $address->state }} <br>
                            <strong>Pincode</strong> : {{ $address->pincode }} <br>
                            <strong>Landmark</strong> : {{ $address->landmark }}
                        </div>
                        <div style="color: #353535 !important;">
                            <strong>Total Amount</strong> : {{ $totalAmount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('header')
    <style>

    </style>
@endsection
@section('footer')
    <script>
        $(document).ready( function () {

        } );
    </script>
@endsection

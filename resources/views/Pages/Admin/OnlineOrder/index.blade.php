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
                        <h4 class="card-title">Online Orders</h4>
                        <table class="table table-bordered" id="order-table">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Order No </th>
                                <th> Payment </th>
                                <th> Status </th>
                                <th> Amount </th>
                                <th> Action </th>
                                <th> Invoice </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($onlineInvoice as $index => $invoice)
                                <tr>
                                    <td> {{ $index + 1 }} </td>
                                    <td> ANON-{{ sprintf("%06d", $invoice->order_number) }} </td>
                                    <td>{{ $invoice->order->payment_status }}</td>
                                    <td>{{ $invoice->order->status }}</td>
                                    <td> {{ $invoice->created_at->format('jS M Y') }} </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary" title="Edit">Edit</a>
                                        <a href="#" class="btn btn-danger" title="Delete">Delete</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('download.online.invoice', $invoice->id) }}" target="_blank" class="btn btn-success">
                                            <i class="fa fa-download"></i>
                                        </a>
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
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection
@section('footer')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            let table = new DataTable('#order-table', {
                // config options...
            });
        } );
    </script>
@endsection

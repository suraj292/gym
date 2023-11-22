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

                        <form action="{{ route('admin.update.invoices') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Payment</label>
                                        <select class="form-control form-control-sm" name="payment_status">
                                            <option value="">Select Payment Status</option>
                                            <option value="received">Received</option>
                                            <option value="not_received">Not Received</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control form-control-sm" name="delivery_status">
                                            <option value="">Select Delevery Status</option>
                                            <option value="packed">Packed</option>
                                            <option value="dispatched">Dispatched</option>
                                            <option value="delivered">Delivered</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3 update-btn">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <input type="hidden" name="invoice_ids" id="invoice">
                                </div>
                            </div>

                            <table class="table table-bordered" id="order-table">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="checkAll">
                                    </th>
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
                                        <td>
                                            <input type="checkbox" value="{{ $invoice->id }}" class="checkboxes">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.view.order', $invoice->id) }}">
                                                ANON-{{ sprintf("%06d", $invoice->order_number) }}
                                            </a>
                                        </td>
                                        <td>{{ $invoice->order->payment_status }}</td>
                                        <td>{{ $invoice->order->status }}</td>
                                        <td> {{ $invoice->created_at->format('jS M Y') }} </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-primary" title="Edit">Edit</a>
                                            <a href="#" class="btn btn-danger" title="Delete">Delete</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('download.online.invoice', $invoice->id) }}" class="btn btn-success">
                                                <i class="fa fa-download"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <style>
        .update-btn{
            position: relative;
        }
        .update-btn button{
            position: absolute;
            bottom: 20px;
        }
    </style>
@endsection
@section('footer')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            let table = new DataTable('#order-table', {
                // config options...
            });

            $('#checkAll').on('click', function () {
                $('.checkboxes').each(function () {
                    this.checked = !this.checked;
                });
            });

            $('.checkboxes').on('click', function () {
                let selected = [];
                $('.checkboxes:checked').each(function () {
                    selected.push($(this).val());
                });
                // insert selected ids to hidden input where id invoice
                $('#invoice').val(selected);
            });
        } );
    </script>
@endsection

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
            <div class="col-xl-12">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">New Invoice</h4>
                        <div class="basic-form">
                            <form method="post" action="{{ route('admin.invoice.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <h3 class="text-center">Customer Address</h3>
                                    <div class="form-group">
                                        <label class="text-label">Customer Name</label>
                                        <input type="text" name="c_name" class="form-control" placeholder="Customer Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Customer Address</label>
                                        <input type="text" name="c_address" class="form-control" placeholder="Customer Address">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Customer state</label>
                                        <input type="text" name="c_state" class="form-control" placeholder="Customer state">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Customer phone</label>
                                        <input type="text" name="c_phone" class="form-control" placeholder="Customer phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Customer GSTIN</label>
                                        <input type="text" name="c_gstin" class="form-control" placeholder="Customer GSTIN">
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-center">Customer Product</h3>
                                    <div class="form-group">
                                        <label class="text-label">Product Name</label>
                                        <input type="text" name="p_name" class="form-control" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Product HSN</label>
                                        <input type="text" name="p_hsn" class="form-control" placeholder="Product HSN Code">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Product QTY</label>
                                        <input type="text" name="p_qty" class="form-control" placeholder="Product QTY">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Product Rate</label>
                                        <input type="number" name="p_rate" class="form-control" placeholder="Product Rate">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Amount in Words</label>
                                        <input type="text" name="t_amount_in_words" class="form-control" placeholder="Amount in Words">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label class="text-label">Product Amount</label>--}}
{{--                                        <input type="text" name="p_amount" class="form-control" placeholder="Product Amount">--}}
{{--                                    </div>--}}
                                </div>
                                <div>
                                    <h3 class="text-center">Customer Tax</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="text-label">CGST %</label>
                                                <input type="number" name="t_cgst_p" class="form-control" placeholder="CGST %">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="text-label">CGST Amount</label>
                                                <input type="number" name="t_cgst_a" class="form-control" placeholder="CGST Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="text-label">SGST %</label>
                                                <input type="number" name="t_sgst_p" class="form-control" placeholder="SGST %">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="text-label">SGST Amount</label>
                                                <input type="number" name="t_sgst_a" class="form-control" placeholder="SGST Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Total Amount</label>
                                        <input type="number" name="t_total_amount" class="form-control" placeholder="Total Amount">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Taxable Amount</label>
                                        <input type="number" name="t_taxable_amount" class="form-control" placeholder="Taxable Amount">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Grand Total</label>
                                        <input type="number" name="t_grand_Total" class="form-control" placeholder="Grand Total">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-form mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('layouts.admin.app')
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="container-fluid">
        <div class="row page-titles">
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4 pull-left">Table Basic</h4>
                            <a href="{{ route('admin.product.create') }}" class="mb-4 btn btn-primary pull-right">Add New Product</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table" style="min-width: 450px;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $index => $product)
                                    <tr>
                                        <th>{{ $index + 1 }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>₹{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td class="color-primary">
                                           <!-- create bootstrap button for edit and delete -->
                                           <a href="{{ route('admin.product.edit', encrypt($product->id)) }}" class="btn btn-primary">Edit</a>
                                           <a href="" class="btn btn-danger">Delete</a>
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
    <!--**********************************
Content body end
***********************************-->
@endsection

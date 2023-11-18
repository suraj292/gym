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
                        <h4 class="card-title mb-4">Product</h4>
                        <div class="basic-form">
                            <form method="post" action="{{ route('admin.product.update', encrypt($product->id)) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="text-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{ $product->name }}">
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-label">description</label>
                                    <input type="text" name="description" class="form-control" placeholder="Description"value="{{ $product->description }}">
                                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Quantity</label>
                                    <input type="number" name="stock" class="form-control" placeholder="quantity" value="{{ $product->stock }}">
                                    @error('stock')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                                    @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Discount</label>
                                    <input type="number" name="discount" class="form-control" placeholder="discount (optional)" value="{{ $product->discount }}">
                                    @error('discount')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Images</label>
                                    <input type="file" name="images[]" class="form-control" placeholder="Images" multiple>
                                    @error('images')<span class="text-danger">{{ $message }}</span>@enderror
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

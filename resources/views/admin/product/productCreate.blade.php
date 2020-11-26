@extends('admin.mainadminpanel')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-product.index') }}">Product</a></li>
                        <li class="breadcrumb-item"><a href="">Create</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card card-primary mx-3">
        <div class="card-header">
            <h3 class="card-title">Product Details</h3>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form role="form" action="{{ route('admin-product.store') }}" method="post">
            @csrf
            <div class="card-body row">
                <div class="form-group col-md-6">
                    <label for="name" class="ml-2">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="description" class="ml-2">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" value="{{ old('description') }}">

                    @error('description')
                    <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="price" class="ml-2">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price" value="{{ old('price') }}">

                    @error('price')
                    <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="quantity" class="ml-2">Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter Quantity" value="{{ old('quantity') }}">

                    @error('quantity')
                    <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="discount" class="ml-2">Discount</label>
                    <input type="number" name="discount" class="form-control" id="discount" placeholder="Enter Discount" value="{{ old('discount') }}">

                    @error('discount')
                    <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="form-group col-md-6" data-select2-id="67">
                    <label>Select Category</label>
                    <select class="form-control select2bs4 select2-hidden-accessible" name="category_id" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
                        @foreach($allCategory as $category)
                            <option value="{{ $category->id }}" data-select2-id="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                    <div class="text-red-500 mt-2 text-sm mx-3 text-bold">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                {{--<div class="form-group">
                    <label for="productImg">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="productImg">
                            <label class="custom-file-label" for="productImg">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>--}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer flex justify-end">
                <button type="submit" class="btn btn-primary">Create Product</button>
            </div>
        </form>
    </div>

@endsection

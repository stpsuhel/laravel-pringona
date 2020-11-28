@extends('admin.mainadminpanel')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-category.index') }}">Category</a></li>
                        <li class="breadcrumb-item"><a href="">Create</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card card-primary mx-3">
        <div class="card-header">
            <h3 class="card-title">Category Details</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin-category.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="ml-2">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name"
                           @if($category) value="{{ $category->name }}" @else value="{{ old('name') }}" @endif>
                </div>

                <div class="form-group">
                    <label for="description" class="ml-2">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description"
                           @if($category) value="{{ $category->description }}" @else value="{{ old('description') }}" @endif>
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
                <button type="submit" class="btn btn-primary">Create Category</button>
            </div>
        </form>
    </div>

@endsection

@extends('admin.mainadminpanel')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Product</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="w-50 sm:w-full m-auto">
        @if(session('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="card mx-3">
        <div class="card-header border-transparent">
            <h3 class="card-title p-2">All Product</h3>
            <div class="card-tools mr-2">
                <a href="{{ route('admin-product.create') }}" class="btn btn-sm btn-secondary float-right p-2">Create New Product</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive table-striped">
                <table class="table m-0 border-bottom">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="flex justify-content-end">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allProduct as $product)
                        <tr>
                            <td><a href="{{ route('admin-product.show', $product->id) }}">{{ $product->name }}</a></td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td class="flex justify-content-end">
                                <form action="{{ route('admin-product.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger p-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="p-3">
                    {{ $allProduct->links() }}
                </div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
    </div>

@endsection

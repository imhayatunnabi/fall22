@extends('backend.master')
@section('content')
<div class="container">
    <h4 class="text-center">Product List</h4>
</div>
<div class="container mb-2">
    <a href="{{ route('product.create.form') }}" class="btn btn-success">Create Product</a>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name </th>
                    <th scope="col">Product Image </th>
                    <th scope="col">Category Name </th>
                    <th scope="col">Product Details</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product quantity</th>
                    <th scope="col">Product weight</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="">
                    <td scope="row">{{ $product->id }}</td>
                    <td>{{ $product->product_name}}</td>
                    <td><img width="70px" src="{{ url('/uploads/product/',$product->product_image) }}" alt="" srcset="">
                    </td>
                    <td>{{ $product->category->category_name }}</td>
                    <td>{{ $product->product_details }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->product_quantity }}</td>
                    <td>{{ $product->product_weight }}</td>
                    <td>
                        <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('product.edit.form',$product->id) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection

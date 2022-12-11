@extends('backend.master')
@section('content')
<div class="container">
    <h4 class="text-center">Product Create Form</h4>
</div>
<div class="container">
    <form action="{{ route('product.create.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Details</label>
            <input type="text" class="form-control" name="product_details" id="" aria-describedby="helpId"
                placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="product_price" id="" aria-describedby="helpId"
                placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Weight</label>
            <input type="number" class="form-control" name="product_weight" id="" aria-describedby="helpId"
                placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Quantity</label>
            <input type="number" class="form-control" name="product_quantity" id="" aria-describedby="helpId"
                placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Image</label>
            <input type="file" class="form-control" name="product_image" id="" aria-describedby="helpId"
                placeholder="">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection

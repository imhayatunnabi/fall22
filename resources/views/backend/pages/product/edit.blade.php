@extends('backend.master')
@section('content')
<div class="container">
    <h4 class="text-center">Product upadate Form</h4>
</div>
<div class="container">
    {{-- @dd($product) --}}
    <form action="{{ route('product.edit.form.submit',$product->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="" aria-describedby="helpId" placeholder="" value="{{ $product->product_name }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Details</label>
            <input type="text" class="form-control" name="product_details" id="" aria-describedby="helpId"
                placeholder="" value="{{ $product->product_details }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->category_name }}</option>

                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="product_price" id="" aria-describedby="helpId"
                placeholder="" value="{{ $product->product_price }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Weight</label>
            <input type="number" class="form-control" name="product_weight" id="" aria-describedby="helpId"
                placeholder="" value="{{ $product->product_weight }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Product Quantity</label>
            <input type="number" class="form-control" name="product_quantity" id="" aria-describedby="helpId"
                placeholder="" value="{{ $product->product_quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

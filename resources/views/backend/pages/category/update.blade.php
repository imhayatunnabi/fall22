@extends('backend.master')
@section('content')
{{-- @dd($category) --}}
<h1>Update Category</h1>
<div class="container">
    <div class="mx-auto">
        <form class="form" action="{{ route('category.do.update',$category->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="my-2">
                <label>Catgory Name</label>
                <input type="text" class="form-control" placeholder="Enter your category name"
                    value="{{ $category->category_name }}" name="category_name">
            </div>
            <div class="my-2">
                <label>Catgory Details</label>
                <input type="text" class="form-control" placeholder="Enter your category details"
                    value="{{ $category->category_details }}" name="category_details">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Update</button>
        </form>
    </div>
</div>
@endsection

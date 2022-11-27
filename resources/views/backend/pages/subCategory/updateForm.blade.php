@extends('backend.master')
@section('content')
<form action="{{ route('subcategory.update',$subcategory->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Sub Category Name</label>
        <input type="text" name="subcategory_name" id="" class="form-control" placeholder="Enter your sub category name"
            aria-describedby="helpId" value="{{ $subcategory->subcategory_name }}">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sub Category Details</label>
        <input type="text" name="subcategory_details" id="" class="form-control"
            placeholder="Enter your sub category name" aria-describedby="helpId"
            value="{{ $subcategory->subcategory_details }}">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

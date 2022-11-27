@extends('backend.master')
@section('content')
{{-- validation error messages --}}
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
{{-- validation error messages --}}
<form action="{{ route('subcategory.update',$subcategory->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Sub Category Name</label>
        <input type="text" name="subcategory_name" id="" class="form-control" placeholder="Enter your sub category name"
            aria-describedby="helpId" value="{{ $subcategory->subcategory_name }}" required>
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sub Category Details</label>
        <input type="text" name="subcategory_details" id="" class="form-control"
            placeholder="Enter your sub category name" aria-describedby="helpId"
            value="{{ $subcategory->subcategory_details }}" required>
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

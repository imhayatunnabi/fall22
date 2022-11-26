@extends('backend.master')
@section('content')
<h1>Hello from subCategory create</h1>
<form action="{{ route('subcategory.post') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Subcategory Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter your Sub category name" name="subcategory_name">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Details</label>
        <input type="text" class="form-control" id="exampleInputPassword1"
            placeholder="Enter your subcategory details" name="subcategory_details">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

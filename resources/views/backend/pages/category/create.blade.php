@extends('backend.master')
@section('content')
<h1>Create Category</h1>
<div class="container">
    <div class="mx-auto">
        <form class="form">
            <div class="my-2">
                <label>Catgory Name</label>
                <input type="text" class="form-control" placeholder="Enter your category name">
            </div>
            <div class="my-2">
                <label>Catgory Details</label>
                <input type="text" class="form-control" placeholder="Enter your category details">
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

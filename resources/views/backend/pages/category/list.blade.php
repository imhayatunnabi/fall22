@extends('backend.master')
@section('content')
<div class="container">
    <div class="mx-auto">
        <a href="{{ route('category.form') }}" class="btn btn-primary">Create Category</a>
    </div>
</div>
<h1>Category List</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Details</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category )
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->category_name }}</td>
            <td>{{ $category->category_details }}</td>
            <td>
                <a href="{{ route('category.update',$category->id) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

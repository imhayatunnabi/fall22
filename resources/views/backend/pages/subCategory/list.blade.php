@extends('backend.master')
@section('content')
<h1>Hello from subCategory</h1>
<a href="{{route('subcategory.create')}}" class="btn btn-primary">Create subcategory</a>
@if ($message = session()->get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = session()->get('danger'))
<div class="alert alert-danger alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">SubCategory Name</th>
            <th scope="col">Subcategory Details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <th>{{ $subcategory->id }}</th>
            <td>{{ $subcategory->subcategory_name }}</td>
            <td>{{ $subcategory->subcategory_details }}</td>
            <td><a href="{{ route('subcategory.updateForm',$subcategory->id) }}" class="btn btn-success">Edit</a></td>
            <td><a href="{{ route('subcategory.delete',$subcategory->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

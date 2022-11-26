@extends('backend.master')
@section('content')
<h1>Hello from subCategory</h1>
<a href="{{route('subcategory.create')}}" class="btn btn-primary">Create subcategory</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">SubCategory Name</th>
            <th scope="col">Subcategory Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <th>{{ $subcategory->id }}</th>
            <td>{{ $subcategory->subcategory_name }}</td>
            <td>{{ $subcategory->subcategory_details }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('app')

@section('title', 'Categories')

@section('content')
    <h2>Categories</h2>
    <div class="float-md-right">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">สร้าง</a>
    </div>
    <br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at ?: '-' }}</td>
                <td>
                    <a href="#" class="btn btn-primary">แก้ไข</a>
                    <a href="#" class="btn btn-danger">ลบ</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
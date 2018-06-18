@extends('app')

@section('title', 'Posts')

@section('content')
    @include('partials.alert_success')

    <h2>Posts</h2>
    <div class="float-md-right">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">สร้าง</a>
    </div>
    <br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Category</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ object_get($post, 'category.name', '-') }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at ?: '-' }}</td>
                <td>
                    <a href="{{ route('posts.edit', [$post]) }}" class="btn btn-primary">แก้ไข</a>
                    <a href="{{ route('posts.destroy', [$post]) }}" class="btn btn-danger">ลบ</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
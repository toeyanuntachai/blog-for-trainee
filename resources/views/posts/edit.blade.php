@extends('app')

@section('title', 'Edit Post')

@section('content')

    @include('partials.alert_success')

    <form action="{{ route('posts.update', [$post]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea name="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
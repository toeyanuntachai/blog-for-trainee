@extends('app')

@section('title', 'Create')

@section('content')

    @include('partials.alert_success')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



{{--KUY BOY--}}
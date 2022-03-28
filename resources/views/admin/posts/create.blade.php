@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="posts_title">Title:</label>
                <input type="text" class="form-control" id="posts_title" name="posts_title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <div>
                <select name="category_id" class="form-select form-select-lg mb-3" aria-label="Default select example">
                    <option selected>Select a category:</option>
                    @foreach ($data_categories as $value)
                        <option value="{{ $value->id }}">
                            {{ $value->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="img_upload" name="img_upload">
            </div>
            @foreach ($data_tags as $element)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags_id[]" id="{{ $element->slug }}"
                        value="{{ $element->id }}">
                    <label class="form-check-label" for="{{ $element->slug }}">
                        {{ $element->name }}
                    </label>
                </div>
            @endforeach
            <br>
            <input type="submit" class="btn btn-primary" value="Add">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($post) ? 'Edit Post' : 'Create Post' }}
        </div>

        <div class="card-body">
            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (isset($post))
                    @method('PUT')
                @endif



                <div class="form-group">
                    <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ isset($post) ? $post->title : '' }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="5" rows="5">{{ isset($post) ? $post->description : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                <input class="form-control" type="hidden" name="content" id="content" value="{{ isset($post) ? $post->content : '' }}">
                    <trix-editor input="content"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                <input type="text" class="form-control" name="published_at" id="published_at" value="{{ isset($post) ? $post->published_at : '' }}">
                </div>

                @if(isset($post))
                    <div class="form-group">
                    <img src="{{ asset('storage/'.$post->image) }}" style="width: 100%" alt="Post image is displayed">
                    </div>
                @endif

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>

                <button class="btn btn-success" type="submit">
                    {{ isset($post) ? 'Update Post' : 'Create Post' }}
                </button>

            </form>
        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/trix.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('scripts')
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/trix-core.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#published_at', {})
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
    </div>
    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <th>Image</th>
                <th>Title</th>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <img src="{{ asset("storage/".$post->image) }}" alt="Post Image" style="height: 70px; width: 70px;">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                    <td>
                        <a href="" class="btn btn-info btn-sm mr-1">Edit</a>

                        <a href="" class="btn btn-danger btn-sm">Trash</a>
                    </td>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

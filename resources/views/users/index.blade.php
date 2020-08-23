@extends('layouts.usersapp')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('users.edit-profile') }}" class="btn btn-info">My Profile</a>
</div>
<div class="card card-default">
    <div class="card-header">Users</div>
    <div class="card-body">
        @if ($users->count() > 0)
        <table class="table table-striped">
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <img src="{{ Gravatar::src($user->email) }}" alt="Users Email Avatar"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->role }}
                    </td>
                    <td>
                        @if (!$user->isAdmin())
                        <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-dark btn-sm">
                                Make Admin
                            </button>
                        </form>
                        @else
                        <form action="{{ route('users.revoke-admin', $user->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-warning btn-sm text-dark">
                                Revoke Admin
                            </button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- @elseif(!$users::onlyTrashed())
            <h3 class="text-center">No Trashed users Yet...</h3> --}}
        @else
        <h3 class="text-center">No Users Yet...</h3>
        @endif
    </div>
</div>
@endsection

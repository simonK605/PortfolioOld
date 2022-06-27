@extends('layouts.admin')

@section('adminHeader')
    <a class="admin__header_top_link" href="{{ route('users.index') }}">Users</a>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">Update User</div>
        <div class="card-body">
            <form action="{{ route('users.update', ['user' => $user]) }}" method="POST">
                @csrf
                @method('PUT')
                <input class="admin__form_inp" type="text" name="name" value="{{ $user->name }}" placeholder="Name">
                <input class="admin__form_inp" type="text" name="lastName" value="{{ $user->last_name }}"
                    placeholder="Last Name">
                <input class="admin__form_inp" type="email" name="email" value="{{ $user->email }}" placeholder="Email">
                <input class="admin__form_inp" type="text" name="login" value="{{ $user->login }}" placeholder="Login">
                <select class="admin__form_inp" name="role">
                    @if ($user->role == 'admin')
                        <option value="user">user</option>
                        <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                    @endif
                    @if ($user->role == 'user')
                        <option value="admin">admin</option>
                        <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                    @endif
                </select>

                <button class="item__btn">Update</button>
            </form>

            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <p class="error">{{ $e }}</p>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('title')
    {{ $app_name }} - Accueil
@endsection


@section('content')
    <p>
        {{ $users->links() }}
    </p>

    <table class="table-auto">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <th>{{ $user->name }}</th>
                <th>{{ $user->email }}</th>
                <td>
                    <a class="btn btn-primary d-block m-1" href="{{ route('user.show', $user) }}">{{ __('Show') }}</a>
                    <a class="btn btn-warning d-block m-1" href="{{ route('user.edit', $user) }}">{{ __('Edit') }}</a>
                    <form action="{{ route('user.delete', $user) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger d-block w-100" type="submit">{{ __('Delete') }}</button>
                    </form>
                </td>
            <tr>
        @endforeach
    </table>
@endsection


@extends('layouts.appAssocie')

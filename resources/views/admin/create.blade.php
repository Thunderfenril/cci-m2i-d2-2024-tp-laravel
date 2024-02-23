@extends('layouts.appAssocie')

@section('title', 'Create a user')

@section('content')
    <form action="{{ route('Admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">

        <br>
        <label for="password">Password</label>
        <input type="email" name="password" id="password" value="{{ old('password') }}">


        <br>
        <input type="submit" value="Créer">
    </form>
@endsection

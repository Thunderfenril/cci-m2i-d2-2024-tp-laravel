@section('title')
    {{ $app_name }} - Accueil
@endsection


@section('content')
    Acceuil
    <br>

    <form action="{{ route('Admin.login') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">

        <br>
        <label for="password">Password</label>
        <input type="email" name="password" id="password" value="{{ old('password') }}">


        <br>
        <input type="submit" value="Connexion">
    </form>
@endsection


@extends('layouts.app')

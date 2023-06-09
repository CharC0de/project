@extends('layouts.app')

@section('content')
    <h1>User List</h1>

    @foreach($users as $user)
        <div>
            <h3>Name: {{ $user->name }}</h3>
            <p>Email: {{ $user->email }}</p>
        </div>
        <hr>
    @endforeach
@endsection

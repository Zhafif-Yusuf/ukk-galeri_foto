@extends('layouts.app')

@section('content')
        <h1>Edit User</h1>
        <form action="{{ route('users.update', $user->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama</label>
            <input type="text" name="name" value ="{{$user->name}}" required>
            <br>
            <label>Email</label>
            <input type name="email" value ="{{$user->email}}" required></input>
            <br>
            <label>Password</label>
            <input type="password" name="password" value ="{{$user->password}}" required>
            <br>
            
            <button type="submit">Edit</button>
        </form>
@endsection

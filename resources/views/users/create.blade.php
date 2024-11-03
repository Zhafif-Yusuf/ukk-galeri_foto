@extends('layouts.app')

@section('content')
        <h1>Tambah User</h1>
        <form action="{{route('users.store') }}" method="POST">
            @csrf
            <label>Nama</label>
            <input type="text" name="name" required>
            <br>
            <label>Email</label>
            <input type name="email" required></input>
            <br>
            <label>Password</label>
            <input type="password" name="password" required>
            <br>
            
            <button type="submit">Create</button>
        </form>
@endsection
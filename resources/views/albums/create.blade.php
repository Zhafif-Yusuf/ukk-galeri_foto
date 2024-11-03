@extends('layouts.app')

@section('content')
        <h1>Tambah Album</h1>
        <form action="{{ route('albums.store') }}" method="POST">
            @csrf
            <label for="NamaAlbum">Album Name</label>
            <input type="text" name="NamaAlbum" id="NamaAlbum" required>
            <br>
            <label for="DeskripsiFoto">Photo Description</label>
            <textarea name="DeskripsiFoto" id="DeskripsiFoto" required></textarea>
            <br>
            <label for="TanggalDibuat">Creation Date</label>
            <input type="date" name="TanggalDibuat" id="TanggalDibuat" required>
            <br>
            <label for="UserId">User:</label>
            <input type="number" name="UserId" id="UserId" required>
            <br>
            <button type="submit">Create</button>
        </form>
@endsection
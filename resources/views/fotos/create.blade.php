@extends('layouts.app')

@section('content')
        <h1>Tambah Foto</h1>
        <form action="{{ route('fotos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="JudulFoto">Album Name</label>
            <input type="text" name="NamaF" id="NamaAlbum" required>
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
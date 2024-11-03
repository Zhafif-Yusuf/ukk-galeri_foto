@extends('layouts.app')

@section('content')
        <h1>Edit Album</h1>
        <form action="{{ route('albums.update', $album ) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="NamaAlbum">Album Name</label>
            <input type="text" name="NamaAlbum" id="NamaAlbum" value ="{{$album->NamaAlbum}}" required>
            <br>
            <label for="DeskripsiFoto">Photo Description</label>
            <input type="text" name="DeskripsiFoto" id="DeskripsiFoto" value ="{{$album->DeskripsiFoto}}" required></input>
            <br>
            <label for="TanggalDibuat">Creation Date</label>
            <input type="date" name="TanggalDibuat" id="TanggalDibuat" value ="{{$album->TanggalDibuat}}" required>
            <br>
            <label for="UserId">User:</label>
            <input type="number" name="UserId" id="UserId" value ="{{$album->UserId}}" required>
            <br>
            <button type="submit">Ubah</button>
        </form>
@endsection
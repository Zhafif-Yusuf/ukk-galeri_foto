a@extends('layouts.app')

@section('content')

<h1>Foto</h1>
<a href="{{route('fotos.create')}}">DAFTAR foto BARU </a>
<ul> 
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Foto</th>
                <th>Deskripsi Foto</th>
                <th>Tanggal Unggah</th>
                <th>Lokasi File</th>
                <th>Album Id</th>
                <th>User Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($fotos as $foto)
        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->JudulFoto}}</td>
                <td>{{$user->DeskripsiFoto}}</td>
                <td>{{$user->TanggalUnggah}}</td>
                <img src="{{ asset('storage/' . $foto->LokasiFile) }}" alt="{{ $foto->JudulFoto }}" width="100" height="100" style="object-fit: cover;">
                </td>
                <td>{{$foto->album->NamaAlbum}}</td>
                <td>{{$foto->user->name}}</td>
                <td><a href="{{route ('fotos.edit', $foto->id)}}">Edit</a></td>
                <td>
                <form action="{{route ('fotos.destroy', $foto->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <li>
            <a href="{{route ('fotos.edit', $foto->id)}}"></a>
        </li>

    </ul>

@endsection
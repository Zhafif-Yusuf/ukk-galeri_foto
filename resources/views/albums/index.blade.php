@extends('layouts.app')

@section('content')

<h1>Albums List</h1>
<a href="{{route('albums.create')}}">Create New Album </a>
<ul> 
   
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Album Name</th>
                <th>Description</th>
                <th>Creation Date</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($albums as $album)
        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$album->NamaAlbum}}</td>
                <td>{{$album->DeskripsiFoto}}</td>
                <td>{{$album->TanggalDibuat}}</td>
                <td>{{$album->user->name}}</td>
                <td>
                    <a href="{{route ('albums.edit', $album->id)}}">EDIT</a>
                    <form action="{{route ('albums.destroy', $album->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Delete</button>
</a>
</td>
</form>
            </tr>
            @endforeach
        </tbody>
    </table>
    <li>
        <a href="{{route('albums.edit', $album->id)}}"></a>
    </li>
   
</ul>

@endsection
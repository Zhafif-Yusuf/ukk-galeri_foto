@extends('layouts.app')

@section('content')

<h1>Albums List</h1>
<a href="{{route('users.create')}}">DAFTAR AKUN BARU </a>
<ul> 
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>email</th>
                <th>action</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                
               
                <td>
                    <a href="{{route ('users.edit', $user->id)}}">EDIT</a>
                    <form action="{{route ('users.destroy', $user->id)}}" method="POST">
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
        <a href="{{route('users.edit', $user->id)}}"></a>
    </li>
   
</ul>

@endsection
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3> Data User</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('user.create')}}">Tambah Data User</a>
            <table class="table table-bordered">
                <thead>
                    <tr>  
                        <td>Nama</td>
                        <td>Role</td>
                        <td>Email</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($datauser as $user ) 
                    <tr> 
                        <td>{{$user->name}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{route ('user.show', $user->id)}}" class="btn btn-success mr-2">show</a> &nbsp;
                                <a href="{{route ('user.edit', $user->id)}}" class="btn btn-primary mr-2">Edit</a> &nbsp;
                                <form action="{{route ('user.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

</div>

@endsection
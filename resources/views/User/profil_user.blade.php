@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center"> 
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil User</h3>
        </div>
        <div class="card-body">
            @can('isAdmin')
            <a href="{{route ('user.index')}}">Kembali</a> 
            @endcan
            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4>: {{$user->name}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Email</h4>
                <h4>: {{$user->email}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Role</h4>
                <h4>: {{$user->role}}</h4>
            </div>
        </div>
    </div>
</div>

@endsection
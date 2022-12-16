@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3> Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.create')}}">Tambah Data Siswa</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>NIS</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    
                    @php($no = 0)
                    @foreach ($datasiswa as $siswa )
                    @php($no++)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$siswa->nis}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{route ('siswa.show', $siswa->id)}}" class="btn btn-success mr-2">show</a> &nbsp;
                                <a href="{{route ('siswa.edit', $siswa->id)}}" class="btn btn-primary mr-2">Edit</a> &nbsp;
                                <form action="{{route ('siswa.destroy', $siswa->id)}}" method="POST">
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
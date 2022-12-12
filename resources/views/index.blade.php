@extends('layouts.app')
@section('content')
<div class="container">
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
                <td>{{$siswa->name}}</td>
                <td>Tombol Aksi</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>

</div>

@endsection
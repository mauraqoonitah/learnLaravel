@extends('layout.main')

@section('title', 'Daftar Mahasiswa')
@section('container')

<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-2">Daftar Mahasiswa</h1>
    <table class=" mt-3 table table-hover table-striped">
        <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">NRP</th>
              <th scope="col">Email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs) 
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nrm}}</td>
                <td>{{$mhs->email}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>
                    <a href="" class="badge rounded-pill bg-success">edit</a>
                    <a href="" class="badge rounded-pill bg-danger">delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
   
</div></div></div>

@endsection

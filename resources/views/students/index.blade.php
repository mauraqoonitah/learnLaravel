@extends('layout.main')

@section('title', 'Students')
@section('container')

<div class="container">
  <div class="row">
    <div class="col-lg-6">
        <h1 class="mt-2">Students</h1>
        <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{$student->nama}}
              <a href="/students/{{$student->id}}" class="badge bg-dark">detail</a>
            </li>
            @endforeach
        </ul>

    </div>
  </div>
</div>

@endsection

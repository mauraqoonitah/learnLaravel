@extends('layout.main')

@section('title', 'Form Tambah Mahasiswa')
@section('container')

<div class="container">
<div class="row">
<div class="col-10">
    <h1 class="mt-2">Form Tambah Mahasiswa</h1>
    
    <form method="post" action="/students" class="col-10 mt-3">
       @csrf
        <div class="form-group mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" placeholder="Masukkan nama" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">

          @error('nama') 
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror

        </div>

        <div class="form-group mb-3">
          <label for="nrm" class="form-label">NRM</label>
          <input type="text" placeholder="Masukkan nrm" class="form-control @error('nrm') is-invalid @enderror" id="nrm" name="nrm" value="{{ old('nrm') }}">

          @error('nrm') 
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror

        </div>

        <div class="form-group mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" placeholder="Masukkan email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

          @error('email') 
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror


        </div>

        <div class="form-group mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" placeholder="Masukkan jurusan" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
        </div>
      
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
   
</div></div></div>

@endsection

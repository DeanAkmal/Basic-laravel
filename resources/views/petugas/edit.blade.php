@extends('template.master')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('petugas.update', ['petugas' => $petugas->id_petugas]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control custom-input1 @error('username') is-invalid @enderror" id="username" value="{{$petugas->username}}">
            @error('username')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">  
            <label for="password">Password</label>
            <input name="password" type="text" class="form-control custom-input2 @error('password') is-invalid @enderror" id="password" value="{{$petugas->password}}">
            @error('password')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="text" class="form-control custom-input2 @error('nama_petugas') is-invalid @enderror" id="nama_petugas" value="{{$petugas->nama_petugas}}">
            @error('nama_petugas')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="level">Level</label><br>
            <div>
              <input type="radio" name="level" value="admin" required {{ $petugas->level === 'admin' ? 'checked' : '' }}> Admin
              <input type="radio" name="level" value="petugas" required {{ $petugas->level === 'petugas' ? 'checked' : '' }}> Petugas
            </div>
            @error('level')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

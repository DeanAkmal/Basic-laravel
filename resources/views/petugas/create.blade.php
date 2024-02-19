@extends('template.master')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control custom-input1 @error('username') is-invalid @enderror" id="username" value="{{old('username')}}">
            @error('username')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control custom-input2 @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
            @error('password')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="nama_petugas" class="form-control custom-input2 @error('nama_petugas') is-invalid @enderror" id="nama_petugas" value="{{old('nama_petugas')}}">
            @error('nama_petugas')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
                <label for="level">Level</label><br>
                <input type="radio" name="level" value="admin"> Admin
                <input type="radio" name="level" value="petugas"> Petugas      
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

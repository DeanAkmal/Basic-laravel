@extends('template.master')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', ['kelas' => $kelas->id_kelas]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control custom-input1 @error('nama_kelas') is-invalid @enderror" id="nama_kelas" value="{{$kelas ->nama_kelas}}">
            @error('nama_kelas')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="kompetinsi_keahlian">Kompetensi Keahlian</label>
            <input name="kompetinsi_keahlian" type="text" class="form-control custom-input2 @error('kompetinsi_keahlian') is-invalid @enderror" id="kompetinsi_keahlian" value="{{$kelas->kompetinsi_keahlian}}">
            @error('kompetensi_keahlian')
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

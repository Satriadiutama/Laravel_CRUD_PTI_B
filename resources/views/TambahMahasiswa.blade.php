@extends('layouts.main')

@section('nav_right')
    <li><a href="{{ route('view_mhs') }}">Data Mahasiswa</a></li>
    <li class="active">Tambah mahasiswa</li>
@endsection

@section('main')

    <div class="col-lg-9 mx-auto">
        <div class="card">
          <div class="card-header text-center">
            <strong>Tambah Data Mahasiswa</strong> 
          </div>
          <div class="card-body card-block">
            <form action="{{ route('add') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }} 
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">NIM</label></div>
                    <div class="col-12 col-md-5"><input type="text" id="text-input" name="nim_mhs" placeholder="Masukan NIM Anda" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                    <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama_mhs" placeholder="Masukan Nama Lengkap Anda" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Kelas</label></div>
                    <div class="col-12 col-md-5"><input type="text" id="text-input" name="kelas_mhs" placeholder="Masukan Kelas Anda" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Program Studi</label></div>
                    <div class="col-12 col-md-5"><input type="text" id="text-input" name="prodi_mhs" placeholder="Masukan Program Studi Anda" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1"><label for="text-input" class=" form-control-label">Fakultas</label></div>
                    <div class="col-12 col-md-5"><input type="text" id="text-input" name="fakultas_mhs" placeholder="Masukan Fakultas Anda" class="form-control"></div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('nav_right')
    <li><a href="{{ route('view_mhs') }}">Data Mahasiswa</a></li>
    <li class="active">Edit mahasiswa</li>
@endsection

@section('main')

    <div class="col-lg-9 col-centered">
        <div class="card">
          <div class="card-header text-center">
            <strong>Edit Data Mahasiswa</strong> 
          </div>
          <div class="card-body card-block">
            @foreach ($data_mhs as $data)
                <form action="{{ route('edit') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }} 
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">NIM</label></div>
                        <div class="col-12 col-md-5"><input type="text" id="text-input" name="nim_mhs" placeholder="Masukan NIM Anda" class="form-control" value="{{ $data->nim_mahasiswa }}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                        <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama_mhs" placeholder="Masukan Nama Lengkap Anda" class="form-control" value="{{ $data->nama_mahasiswa }}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Kelas</label></div>
                        <div class="col-12 col-md-5"><input type="text" id="text-input" name="kelas_mhs" placeholder="Masukan Kelas Anda" class="form-control" value="{{ $data->kelas_mahasiswa }}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Program Studi</label></div>
                        <div class="col-12 col-md-5"><input type="text" id="text-input" name="prodi_mhs" placeholder="Masukan Program Studi Anda" class="form-control"  value="{{ $data->prodi_mahasiswa }}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-1"><label for="text-input" class=" form-control-label">Fakultas</label></div>
                        <div class="col-12 col-md-5"><input type="text" id="text-input" name="fakultas_mhs" placeholder="Masukan Fakultas Anda" class="form-control" value="{{ $data->fakultas_mahasiswa }}"></div>
                    </div>

                    <div class="card-footer  text-center">
                        <button type="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
                        <button type="reset" class="btn btn-outline-danger btn-sm">Batal</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection

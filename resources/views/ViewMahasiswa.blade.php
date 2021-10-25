@extends('layouts.main')

@section('nav_right')
    <li class="active">Data mahasiswa</li>
@endsection

@section('main')

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <strong class="card-title">Data Mahasiswa </strong>
                    </div>
                    <div class="card-body text-right">
                        <a href="{{ route('add_mhs') }}"><button type="button" class="btn btn-outline-primary">Tambah</button></a>
                    </div>
              <table id="bootstrap-data-table" class="table table-striped table-bordered table table-dark ">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_mhs as $data)
                        <tr>
                            <td>{{ $data->nim_mahasiswa }}</td>
                            <td>{{ $data->nama_mahasiswa }}</td>
                            <td>{{ $data->kelas_mahasiswa }}</td>
                            <td>{{ $data->prodi_mahasiswa }}</td>
                            <td>{{ $data->fakultas_mahasiswa }}</td>
                            <td>
                                <a href="{{ route('edit_mhs', [$data->id]) }}"><button type="button" class="btn btn-success btn-sm" style="color:white">Edit</button></a>
                                <a href="{{ route('delete', [$data->id]) }}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
@endsection


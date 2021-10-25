<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function TambahMahasiswa()
    {
        return view('TambahMahasiswa');
    }

    public function addData(Request $request)
    {
        DB::table('mahasiswa')->insert(
            [
                'nim_mahasiswa' => $request->nim_mhs,
                'nama_mahasiswa' => $request->nama_mhs,
                'kelas_mahasiswa' => $request->kelas_mhs,
                'prodi_mahasiswa' => $request->prodi_mhs,
                'fakultas_mahasiswa' => $request->fakultas_mhs
            ]
        );
        return redirect('/');
    }
    public function viewMahasiswa()
    {
        $mhs = DB::table('mahasiswa')->get();
        return view('viewMahasiswa', ['data_mhs' => $mhs]);
    }

    public function getId($id)
    {
        $mhs = DB::table('mahasiswa')->where('id', $id)->get();
        return view('editMahasiswa', ['data_mhs' => $mhs]);
    }

    public function editData(Request $request)
    {
        DB::table('mahasiswa')->where('id', $request->id)->update(
            [
                'nim_mahasiswa' => $request->nim_mhs,
                'nama_mahasiswa' => $request->nama_mhs,
                'kelas_mahasiswa' => $request->kelas_mhs,
                'prodi_mahasiswa' => $request->prodi_mhs,
                'fakultas_mahasiswa' => $request->fakultas_mhs
            ]
        );
        return redirect('/');
    }


    public function deleteData($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\datauser;
use App\Models\kemampuan;
use App\Models\motivasi;
use App\Models\pendidikanformal;
use App\Models\pendidikannonformal;
use App\Models\pengalaman;
use App\Models\prestasi;
use Illuminate\Http\Request;

class BGU_controller extends Controller
{
    public function storeregist1(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'umur' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'line' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'hobi' => 'required',
            'bahasa' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ortu' => 'required',
            'alamat_ortu' => 'required',
            'no_ortu' => 'required',
            'panggilan' => 'required',
            'pas_foto' => 'required|file|max:8000',
            // Batasan 8MB
            'close_up' => 'required|file|max:8000',
            // Batasan 8MB
            'full_body' => 'required|file|max:8000',
            // Batasan 8MB
        ]);

        $foto_file = $request->file('pas_foto');
        $foto_nama = Session('name') . "." . $request->file('pas_foto')->getClientOriginalExtension();
        $foto_file->move(public_path('pas_foto'), $foto_nama);

        $foto_file2 = $request->file('close_up');
        $foto_nama2 = Session('name') . "." . $request->file('close_up')->getClientOriginalExtension();
        $foto_file2->move(public_path('close_up'), $foto_nama2);

        $foto_file3 = $request->file('full_body');
        $foto_nama3 = Session('name') . "." . $request->file('full_body')->getClientOriginalExtension();
        $foto_file3->move(public_path('full_body'), $foto_nama3);

        $data = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'nim' => $request->input('nim'),
            'prodi' => $request->input('prodi'),
            'umur' => $request->input('umur'),
            'ttl' => $request->input('ttl'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'line' => $request->input('line'),
            'ig' => $request->input('ig'),
            'fb' => $request->input('fb'),
            'tinggi_badan' => $request->input('tinggi_badan'),
            'berat_badan' => $request->input('berat_badan'),
            'hobi' => $request->input('hobi'),
            'bahasa' => $request->input('bahasa'),
            'nama_ayah' => $request->input('nama_ayah'),
            'nama_ibu' => $request->input('nama_ibu'),
            'pekerjaan_ortu' => $request->input('pekerjaan_ortu'),
            'alamat_ortu' => $request->input('alamat_ortu'),
            'no_ortu' => $request->input('no_ortu'),
            'panggilan' => $request->input('panggilan'),
            'pas_foto' => $foto_nama,
            'close_up' => $foto_nama2,
            'full_body' => $foto_nama3
        ];
        // dd($data);
        datauser::create($data);
        return redirect('/form-register2');
    }

    public function storeregist2(Request $request, $nim)
    {
        $sekolahData = $request->input('nama_sekolah');
        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_keluar = $request->input('tahun_keluar');

        // foreach ($sekolahData as $nilai) {
        // Simpan data ke database menggunakan model Eloquent Anda
        // $data = [
        //     'nim'=> Session('nim'),
        //     'nama_sekolah' => $sekolahData,
        //     'tahun_masuk' => $tahun_masuk,
        //     'tahun_keluar' => $tahun_keluar
        // ];
        // }
        for ($i = 0; $i < count($sekolahData); $i++) {
            $data = [
                'NIM' => $nim,
                'nama_sekolah' => $sekolahData[$i],
                'tahun_masuk' => $tahun_masuk[$i],
                'tahun_keluar' => $tahun_keluar[$i]
            ];

            pendidikanformal::create($data);
        }
        return redirect('/form-register3');
    }

    public function storeregist3(Request $request, $nim)
    {
        $jenispendidikan = $request->input('jenis_pendidikan');
        $lembaga = $request->input('nama_lembaga');
        $tahun_masuk = $request->input('tahun_masuk');
        $tahun_keluar = $request->input('tahun_keluar');

        // foreach ($sekolahData as $nilai) {
        // Simpan data ke database menggunakan model Eloquent Anda
        // $data = [
        //     'nim'=> Session('nim'),
        //     'nama_sekolah' => $sekolahData,
        //     'tahun_masuk' => $tahun_masuk,
        //     'tahun_keluar' => $tahun_keluar
        // ];
        // }
        for ($i = 0; $i < count($jenispendidikan); $i++) {
            $data = [
                'NIM' => $nim,
                'jenis_pendidikan' => $jenispendidikan[$i],
                'nama_lembaga' => $lembaga[$i],
                'tahun_masuk' => $tahun_masuk[$i],
                'tahun_keluar' => $tahun_keluar[$i]
            ];

            pendidikannonformal::create($data);
        }
        return redirect('/form-register4');
    }

    public function storeregist4(Request $request, $nim)
    {
        $nama_organisasi = $request->input('nama_organisasi');
        $jabatan = $request->input('jabatan');
        $periode = $request->input('periode');

        // foreach ($sekolahData as $nilai) {
        // Simpan data ke database menggunakan model Eloquent Anda
        // $data = [
        //     'nim'=> Session('nim'),
        //     'nama_sekolah' => $sekolahData,
        //     'jabatan' => $jabatan,
        //     'periode' => $periode
        // ];
        // }
        for ($i = 0; $i < count($nama_organisasi); $i++) {
            $data = [
                'NIM' => $nim,
                'nama_organisasi' => $nama_organisasi[$i],
                'jabatan' => $jabatan[$i],
                'periode' => $periode[$i]
            ];

            pengalaman::create($data);
        }
        return redirect('/form-register5');
    }

    public function storeregist5(Request $request, $nim)
    {
        $bidang = $request->input('bidang');
        $keahlian = $request->input('keahlian');

        // foreach ($sekolahData as $nilai) {
        // Simpan data ke database menggunakan model Eloquent Anda
        // $data = [
        //     'nim'=> Session('nim'),
        //     'nama_sekolah' => $sekolahData,
        //     'keahlian' => $keahlian,
        //     'periode' => $periode
        // ];
        // }
        for ($i = 0; $i < count($bidang); $i++) {
            $data = [
                'NIM' => $nim,
                'bidang' => $bidang[$i],
                'keahlian' => $keahlian[$i]
            ];

            kemampuan::create($data);
        }
        return redirect('/form-register6');
    }

    public function storeregist6(Request $request, $nim)
    {
        $nama_penghargaan = $request->input('nama_penghargaan');
        $instansi = $request->input('instansi');
        $tahun = $request->input('tahun');

        $foto_nama = null;

        // Cek apakah ada file sertifikat yang diunggah
        if ($request->hasFile('sertifikat')) {
            $foto_file = $request->file('sertifikat');
            $foto_nama = Session('name') . "." . $request->file('sertifikat')->getClientOriginalExtension();
            $foto_file->move(public_path('sertifikat'), $foto_nama);
        }

        for ($i = 0; $i < count($nama_penghargaan); $i++) {
            $data = [
                'NIM' => $nim,
                'nama_penghargaan' => $nama_penghargaan[$i],
                'instansi' => $instansi[$i],
                'tahun' => $tahun[$i],
            ];

            prestasi::create($data);
        }
        $data = [
            'NIM' => $nim,
            'sertifikat' => $foto_nama,
        ];
        prestasi::create($data);
        return redirect('/dashboard')->with('success', 'Selamat Anda Berhasil Mendaftar Bujang Gadis Unsri 2023');
    }

    public function storeregist7(Request $request, $nim)
    {
        $motivasi = $request->input('motivasi');

        // foreach ($sekolahData as $nilai) {
        // Simpan data ke database menggunakan model Eloquent Anda
        // $data = [
        //     'nim'=> Session('nim'),
        //     'nama_sekolah' => $sekolahData,
        //     'keahlian' => $keahlian,
        //     'periode' => $periode
        // ];
        // }

        $data = [
            'NIM' => $nim,
            'motivasi' => $motivasi
        ];

        motivasi::create($data);
        return redirect('/dashboard')->with('success', 'Selamat Anda Berhasil Mendaftar Bujang Gadis Unsri 2023');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\datauser;
use App\Models\kemampuan;
use App\Models\pendidikanformal;
use App\Models\pendidikannonformal;
use App\Models\pengalaman;
use App\Models\prestasi;
use App\Models\User;
use App\Models\Visitor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use PhpParser\Lexer\TokenEmulator\KeywordEmulator;

class RouteController extends Controller
{
    public function admin(Request $request)
    {
        $total_akun = User::all()->count();

        // Menghitung jumlah nim unik di tabel prestasi
        $total_daftar = Prestasi::distinct('nim')->count();
        $data_pendaftar = datauser::all();

        // Mendapatkan alamat IP pengunjung saat ini
        $visitor_ip = request()->ip();

        // Menyimpan alamat IP pengunjung dalam database atau tempat penyimpanan lain
        // Anda dapat menggunakan model atau DB facade untuk menyimpan data pengunjung
        // Contoh dengan Eloquent:
        Visitor::updateOrCreate(
            ['ip_address' => $visitor_ip],
        );

        // Menghitung jumlah pengunjung unik berdasarkan alamat IP
        $visitor_count = Visitor::distinct('ip_address')->count();
        return view('admin.main', ['total_akun' => $total_akun, 'total_daftar' => $total_daftar, 'visitor_count' => $visitor_count, 'data_pendaftar' => $data_pendaftar]);
    }

    public function admindatauser()
    {
        $data_pendaftar = User::all();
        return view('datapribadi.datauser', ['data_pendaftar' => $data_pendaftar]);
    }

    public function admindatapendaftar()
    {
        $data_pendaftar = datauser::all();
        return view('datapribadi.datapendaftar', ['data_pendaftar' => $data_pendaftar]);
    }

    public function pasfoto()
    {
        $data_pendaftar = datauser::all();
        return view('composite.pasfoto', ['data_pendaftar' => $data_pendaftar]);
    }
    public function closeup()
    {
        $data_pendaftar = datauser::all();
        return view('composite.closebody', ['data_pendaftar' => $data_pendaftar]);
    }

    public function fullbody()
    {
        $data_pendaftar = datauser::all();
        return view('composite.fullbody', ['data_pendaftar' => $data_pendaftar]);
    }

    public function detail($nim)
    {
        $data = datauser::where('nim', $nim)->first();
        return view('admin.detail', ['data' => $data]);
    }

    public function voucher() {
        return view('admin.voucher');
    }

    public function print($nim)
    {
        $datauser = datauser::where('nim', $nim)->first();
        $pendidikanformal = pendidikanformal::where('nim', $nim)->get();
        $pendidikannonformal = pendidikannonformal::where('nim', $nim)->get();
        $kemampuan = kemampuan::where('nim', $nim)->get();
        $pengalaman = pengalaman::where('nim', $nim)->get();
        $prestasi = Prestasi::where('nim', $nim)->whereNotNull('nama_penghargaan')->get();
        $dompdf = new Dompdf();
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
            ]
        ]);
        $html = View::make('form.main', compact('datauser', 'pendidikanformal', 'pendidikannonformal','kemampuan','pengalaman','prestasi'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->setBasePath(public_path('assets/img/logobgu.svg'));
        $dompdf->render();
        return $dompdf->stream();
    }
}

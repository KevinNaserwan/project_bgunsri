<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Surat Pendaftaran Bujang Gadis Unsri 2023</title>
    {{-- <link rel="stylesheet" href="{{ asset('app.css') }}"> --}}
    <style>
        @page {
            size: 21cm 29.7cm;
            margin: 0;
        }

        .judul {
            font-size: 16px;
            text-align: center;
        }

        .kop-surat {
            margin-top: 60px;
        }

        .judul-surat {
            margin-top: 15px;
        }

        .cp {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
        }

        .div1 {
            width: 600px;
            height: 8px;
            background: orange;
            margin: 0 auto;
        }

        .div2 {
            width: 600px;
            height: 4px;
            background: yellow;
            margin: 0 auto;
        }

        .div3 {
            width: 630px;
            height: 60px;
            background: orange;
            margin: 0 auto;
        }


        .div5 {
            width: 630px;
            height: 170px;
            border-style: solid;
            border-width: 1px;
            margin: 0 auto;
        }


        .div4 {
            width: 630px;
            height: 8px;
            background: yellow;
            margin: 0 auto;
            margin-top: 60px;
        }

        .tabel {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 15px;
            width: 70%;
        }

        .tabel4 {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 15px;
            width: 40%;
        }

        .tabel2 {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 15px;
            width: 80%;
        }

        .tabel1 {
            font-size: 14px;
        }

        .title {
            font-size: 14px;
            font-weight: bold;
        }

        .title2 {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 15px;
        }

        .title1 {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 10px;
        }

        .title4 {
            font-size: 14px;
            margin-left: 80px;
            margin-top: 30px;
        }

        .title3 {
            font-size: 14px;
            margin-left: 80px;
            margin-bottom: 40px;
        }

        .logo {
            position: absolute;
            z-index: 30;
            top: 105px;
            margin-left: 60px;
        }


        .logo1 {
            position: absolute;
            z-index: 30;
            top: 105px;
            margin-left: 670px;
        }

        .foto {
            border-style: solid;
            border-width: 1px;
            border-color: black;
            width: 119px;
            height: 155px;
            position: absolute;
            z-index: 10;
            margin-top: 15px;
            margin-left: 600px;
        }

        .foto-size {
            text-align: center;
            padding-top: 47px;
        }

        .alamat {
            width: 300px;
        }

        .gap {
            padding-bottom: 175px;
        }

        .gap2 {
            padding-bottom: 405px;
        }

        .garis {
            width: 170px;
            height: 1px;
            background-color: black;
            margin-top: 60px;
        }

        .ttd {
            position: absolute;
            z-index: 10;
            margin-left: 500px;
            bottom: 320px;
        }

        .bawah-surat {
            position: absolute;
            left: 80px;
            top: 900px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="kop-surat">
        <img src="assets/img/logounsri.png" class="logo" alt="">
        <img src="assets/img/logobgu.png" class="logo1" alt="">
        <h1 class="judul">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h1>
        <h1 class="judul">UNIVERSITAS SRIWIJAYA</h1>
        <h1 class="judul">IKATAN BUJANG GADIS UNIVERSITAS SRIWIJAYA</h1>
        <p class="cp">Contact Person:</p>
        <p class="cp">M. Rifqi Satria (085783780173) / Venadya Fabellira (082184377040)</p>
        <div class="div1"></div>
        <div class="div2"></div>
    </div>
    <div class="judul-surat">
        <h1 class="judul">FORMULIR PENDAFTARAN</h1>
        <h1 class="judul">PEMILIHAN BUJANG GADIS UNIVERSITAS SRIWIJAYA</h1>
        <h1 class="judul">TAHUN 2023</h1>
    </div>
    {{-- <div class="foto"> --}}
    <img src="pas_foto/'. {{ $datauser->pas_foto }}" class="foto" alt="">
    {{-- <p class="foto-size">3x4</p> --}}
    {{-- </div> --}}
    <div class="surat">
        <table border="0" class="tabel">

            <tr>
                <td class="title">Informasi Umum</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $datauser->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Panggilan</td>
                <td>:</td>
                <td>{{ $datauser->panggilan }}</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>{{ $datauser->nim }}</td>
            </tr>
            <tr>
                <td>Prodi/Jurusan</td>
                <td>:</td>
                <td>{{ $datauser->prodi }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $datauser->ttl }}</td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td>{{ $datauser->umur }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $datauser->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Alamat Tempat Tinggal</td>
                <td>:</td>
                <td class="alamat" rowspan="2">{{ $datauser->alamat }}</td>
            </tr>
            <span class="notelp"></span>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td>{{ $datauser->no_telp }}</td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>:</td>
                <td>{{ $datauser->email }}</td>
            </tr>
            <tr>
                <td>Line</td>
                <td>:</td>
                <td>{{ $datauser->line }}</td>
            </tr>
            <tr>
                <td>FB</td>
                <td>:</td>
                <td>{{ $datauser->fb }}</td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td>:</td>
                <td>{{ $datauser->ig }}</td>
            </tr>
            <span></span>
            <span></span>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="title">Informasi Pribadi</td>
            </tr>
            <tr>
                <td>Tinggi/Berat Badan</td>
                <td>:</td>
                <td>{{ $datauser->tinggi_badan }} cm / {{ $datauser->berat_badan }} kg</td>
            </tr>
            <tr>
                <td>Bahasa Asing Yang Dikuasai</td>
                <td>:</td>
                <td>{{ $datauser->bahasa }}</td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td>{{ $datauser->hobi }}</td>
            </tr>
            <tr>
                <td>Nama Ayah Kandung</td>
                <td>:</td>
                <td>{{ $datauser->nama_ayah }}</td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td>:</td>
                <td>{{ $datauser->nama_ibu }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Orang Tua</td>
                <td>:</td>
                <td>{{ $datauser->pekerjaan_ortu }}</td>
            </tr>
            <tr>
                <td>No. Telepon Orang Tua</td>
                <td>:</td>
                <td>{{ $datauser->no_ortu }}</td>
            </tr>
            <tr>
                <td>Alamat Orang Tua</td>
                <td>:</td>
                <td>{{ $datauser->alamat_ortu }}</td>
            </tr>
        </table>
    </div>
    <div class="bawah-surat">
        <div class="div4"></div>
        <div class="div3">
            <table border="0" class="tabel1">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td>@bgunsri</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>bgu.unsri@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="kop-surat">
        <img src="assets/img/logounsri.png" class="logo" alt="">
        <img src="assets/img/logobgu.png" class="logo1" alt="">
        <h1 class="judul">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h1>
        <h1 class="judul">UNIVERSITAS SRIWIJAYA</h1>
        <h1 class="judul">IKATAN BUJANG GADIS UNIVERSITAS SRIWIJAYA</h1>
        <p class="cp">Contact Person:</p>
        <p class="cp">M. Rifqi Satria (085783780173) / Venadya Fabellira (082184377040)</p>
        <div class="div1"></div>
        <div class="div2"></div>
    </div>
    <div class="judul-surat">
    </div>
    <div class="surat">
        <h1 class="title1">Pendidikan Formal</h1>
        <table border="1" style="border-collapse: collapse;" class="tabel2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Sekolah / Universitas</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendidikanformal as $item)
                    <tr>
                        <td>1</td>
                        <td>{{ $item->nama_sekolah }}</td>
                        <td>{{ $item->tahun_masuk }}</td>
                        <td>{{ $item->tahun_keluar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1 class="title1">Pendidikan Non Formal</h1>
        <table border="1" style="border-collapse: collapse;" class="tabel2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Pendidikan</th>
                    <th>Nama Lembaga</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendidikannonformal as $item)
                    <tr>
                        <td>1</td>
                        <td>{{ $item->jenis_pendidikan }}</td>
                        <td>{{ $item->nama_lembaga }}</td>
                        <td>{{ $item->tahun_masuk }}</td>
                        <td>{{ $item->tahun_keluar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1 class="title1">Kemampuan Dan Kompetensi</h1>
        <table border="1" style="border-collapse: collapse;" class="tabel2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Bidang</th>
                    <th>Keahlian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kemampuan as $item)
                    <tr>
                        <td>1</td>
                        <td>{{ $item->bidang }}</td>
                        <td>{{ $item->keahlian }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1 class="title1">Pengalaman Organisasi</h1>
        <table border="1" style="border-collapse: collapse;" class="tabel2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Organisasi</th>
                    <th>Jabatan</th>
                    <th>Periode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengalaman as $item)
                    <tr>
                        <td>1</td>
                        <td>{{ $item->nama_organisasi }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->periode }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="bawah-surat">
        <div class="div4"></div>
        <div class="div3">
            <table border="0" class="tabel1">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td>@bgunsri</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>bgu.unsri@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="kop-surat">
        <img src="assets/img/logounsri.png" class="logo" alt="">
        <img src="assets/img/logobgu.png" class="logo1" alt="">
        <h1 class="judul">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h1>
        <h1 class="judul">UNIVERSITAS SRIWIJAYA</h1>
        <h1 class="judul">IKATAN BUJANG GADIS UNIVERSITAS SRIWIJAYA</h1>
        <p class="cp">Contact Person:</p>
        <p class="cp">M. Rifqi Satria (085783780173) / Venadya Fabellira (082184377040)</p>
        <div class="div1"></div>
        <div class="div2"></div>
    </div>
    <div class="judul-surat">
    </div>
    <div class="surat">
        <h1 class="title1">Prestasi Yang Pernah Diraih</h1>
        <table border="1" style="border-collapse: collapse;" class="tabel2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Penghargaan</th>
                    <th>Instansi Pemberi Penghargaan</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestasi as $item)
                    <tr>
                        <td>1</td>
                        <td>{{ $item->nama_penghargaan }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>{{ $item->tahun }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1 class="title4">Motivasi Mengikuti Bujang Gadis Unsri</h1>
        <div class="div5">
        </div>
        <h1 class="title1">* Diwajibkan Untuk Tulis Tangan Yah Jangdis</h1>
        <div>
            <table border="1" style="border-collapse: collapse;" class="tabel4">
                <thead>
                    <th>No.</th>
                    <th>Berkas</th>
                    <th>Ada</th>
                    <th>Tidak</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Formulir Pendaftaran</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Pas Foto uk. 3x4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Fotokopi KPM</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Foto Full Body</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Foto Close Up</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Fotokopi KHS/SKHUN</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Ftokopi Sertifikat</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Map Berwarna</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nama Pemeriksa</td>
                        <td colspan="2"></td>
                    </tr>
                </tbody>
            </table>
            <div class="ttd">
                <p>Tanda Tangan</p>
                <p>.....................................2023</p>
                <div class="garis"></div>
                <p>NIM. </p>
            </div>
        </div>
    </div>
    <div class="bawah-surat">
        <div class="div4"></div>
        <div class="div3">
            <table border="0" class="tabel1">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td>@bgunsri</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>bgu.unsri@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>

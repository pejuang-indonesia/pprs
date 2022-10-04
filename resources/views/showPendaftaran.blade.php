@extends('layouts.main')
@section('konten')
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<div class="row justify-content-center font-Poppins py-1 py-md-5">
<div class="col-sm-4 col-md-6 ">
    <main class="w-100 m-auto container bg-light rounded py-2">
        <table class="table table-light table-striped py-2 " >
            <h1 class="h2 pt-3 pb-2 text-center">Detail Data Anda</h1>
            <h6 class="text-center fw-light">Jangan lupa untuk membawa berkas-berkas yang telah tercantun pada form pendaftaran ke kantor pesantren Roudlotussholihin dan serahkan kepada pengurus untuk menyelesaikan proses pendaftaran.</h6>
            <hr class="w-100 clearfix my-3" />
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>{{ $detailPendaftar->nama }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ $detailPendaftar->templahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $detailPendaftar->tgllahir }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $detailPendaftar->jkl }}</td>
                </tr>
                <tr>
                    <td>Setatus Anak</td>
                    <td>{{ $detailPendaftar->statusa }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{ $detailPendaftar->nik }}</td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td>{{ $detailPendaftar->desa }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>{{ $detailPendaftar->kecamatan }}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>{{ $detailPendaftar->kabupaten }}</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>{{ $detailPendaftar->provinsi }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $detailPendaftar->email }}</td>
                </tr>
                <tr>
                    <td>Riwayat</td>
                    <td>{{ $detailPendaftar->riwayat }}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>{{ $detailPendaftar->ayah }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td>{{ $detailPendaftar->pekerjaanA }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>{{ $detailPendaftar->ibu }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu</td>
                    <td>{{ $detailPendaftar->pekerjaanI }}</td>
                </tr>
                <tr>
                    <td>Nomor Hp</td>
                    <td>{{ $detailPendaftar->hp }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>{{ $detailPendaftar->sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $detailPendaftar->alamat }}</td>
                </tr>
                <tr>
                    <td>Ijazah Terakhir</td>
                    <td>{{ $detailPendaftar->ijazah }}</td>
                </tr>
                <tr>
                    <td>Setuju Aturan</td>
                    <td>{{ $detailPendaftar->menyetujui }}</td>
                </tr>
                <tr>
                    <td>Waktu Mendaftar</td>
                    <td>{{ $detailPendaftar->created_at }}</td>
                </tr>
            </tbody>

        </table>
    </main>
</div>
</div>


@endsection

@extends('user.navbar.main')

@section('judul','Tambah Data Pegawai')
    
@section('halaman')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-dark">Tambah Data Pegawai</h1>
            <form action="{{route('tpegawai')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama</label>
                    <input type="text" name="nama"  class="form-control" id="nama"placeholder="Masukkan Nama Pegawai" required>
                </div>
                <div class="mb-3">
                    <label for="nomer_hp" class="form-label text-dark">Nomer Hp</label>
                    <input type="text" name="nomer_hp" class="form-control" id="nomer_hp" placeholder="Masukkan Nomer Hp Pegawai" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label text-dark">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan Pegawai" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-lg btn-primary">Simpan</button>
                    <a class="btn btn-lg btn-warning" href="/pegawai" type="back">Back</a>
                </div>
                <input type="hidden" name="status" id="status" value="1">
            </form>
        </div>
    </div>
</div>
@endsection
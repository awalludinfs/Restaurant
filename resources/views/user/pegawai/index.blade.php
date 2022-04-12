@extends('user.navbar.main')

@section('judul','Data Pegawai|Restaurant')
    
@section('halaman')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Pegawai List</h6>
            </div>
            <div class="col" align="right">
                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tambahpegawai">tambah</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer" width="100%" cellspacing="0"  style="width: 100%;">
                          <thead>
                             <tr scope="row">
                                 <th style="width: 10px;">NO</th>
                                <th style="width: 440px;">Name</th>
                                <th style="width: 790px;">Telp</th>
                                <th style="width: 166px;">Email</th>
                                <th style="width: 360px;">Keterangan</th>
                                <th style="width: 590px;">Status</th>
                                <th style="width: 490px;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($Pegawais as $pegawai)
                              <tr role="row" class="odd"> 
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$pegawai->nama}}</td>
                                  <td>{{$pegawai->nomer_hp}}</td>
                                  <td>{{$pegawai->email}}</td>
                                  <td>{{$pegawai->keterangan}}</td>
                                  <td><label class="btn {{ ($pegawai->status == 1) ? 'btn-warning' : 'btn-success'}}">{{ ($pegawai->status == 1) ? 'lama' : ' baru' }}</label></td>
                                  <td>{{$pegawai->created_at}}</td>
                                  <td>
                                      <button class="btn btn-danger">Delete</button>
                                  </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection
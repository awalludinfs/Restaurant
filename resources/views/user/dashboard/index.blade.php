@extends('user.navbar.main')

@section('judul','Dashboard | Restaurant')

@section('halaman')
<h2 class="mt-3 text-dark">Dashbaord</h2>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Pemasukan Hari Ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">&#36;626.85</div>
                        </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                             Pemasukan Kemarin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">&#36;311.33</div>
                        </div>
                        <div class="col-auto">
                         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                     </div>
                </div>
        </div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pemasukan 1 Minggu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">&#36;311.33</div>
                        </div>
                        <div class="col-auto">
                         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                     </div>
                </div>
        </div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                             Pemasukan 1 bulan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">&#36;311.33</div>
                        </div>
                        <div class="col-auto">
                         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                     </div>
                </div>
        </div>
</div>
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Live Table Status</h6>
                </div>
                <div class="col" align="right">
                    
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="table_status"><div class="row">
                <div class="col-lg-2 mb-3">
                <div class="card bg-light text-blackshadow">
                    <div class="card-body">
                        Table 1
                        <div class="mt-1 text-white-50 small">Booked</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 mb-3">
                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            Table 2
                    <div class="mt-1 text-black-50 small">4 Person</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 mb-3">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        Table 3
                        <div class="mt-1 text-white-50 small">Booked</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 mb-3">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        Table 4
                        <div class="mt-1 text-white-50 small">Booked</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 mb-3">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        Table 5
                        <div class="mt-1 text-white-50 small">Booked</div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Ada</p>
                            <h5 class="font-weight-bolder">
                                {{-- {{ $ }} --}}
                            </h5>
                            <p class="mb-0">
                                Mengembalikan
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-collection text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Ada</p>
                            <h5 class="font-weight-bolder">
                                {{-- {{ $ }} --}}
                            </h5>
                            <p class="mb-0">
                                //
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h3 class="text-capitalize"><span id="greet"></span> {{ auth()->user()->name }}</h3>
                <h6 class="text-capitalize">Bagaimana kabar anda hari ini?</h6>
            </div>
            <div class="card-body p-3">
                <div class="chart">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var now = new Date();
    var hrs = now.getHours();
    var msg = "";

    if (hrs >  6) msg = "Selamat Pagi, ";      // After 6am
    if (hrs > 12) msg = "Selamat Siang, ";    // After 12pm
    if (hrs > 17) msg = "Selamat Sore, ";      // After 5pm
    if (hrs > 22) msg = "Selamat Malam, ";      // After 5pm

    document.getElementById('greet').innerHTML = msg;
</script>
<h4 class align="center" >Data Peminjaman</h4>
<table id="example" class="table hover order-column row-border,sortable" style="width:100%">
    <thead>
        <tr>
            <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Jenis Kelamin</th>
            <th>Angkatan</th>
            <th>Barang Di Pinjam</th>
            <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>


@endsection

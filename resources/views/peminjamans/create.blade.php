@extends('layouts.master')

@section('title', 'Peminjaman')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Peminjaman</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('peminjamans.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="nis" id="nis" class="form-select">
                                        <option value="" selected disabled>Nama Siswa</option>
                                           @foreach ($siswa as $d)
                                                <option value="{{ $d->nama }}">{{ $d->nama }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="barang" id="barang" class="form-select">
                                        <option value="" selected disabled>Barang Yang Di Pinjam</option>
                                        <option value="Handphone">Handphone</option>
                                       <option value="Laptop">Laptop</option>
                                       <option value="Handphone & Laptop">Handphone & Laptop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.master')

@section('title', 'Siswa')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Siswa</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('siswas.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control" id="nis" name="nis"
                                        placeholder="NIS Siswa">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Siswa">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    {{-- <label class="h6 text-capitalize" for="rombel">Rombel Siswa</label> --}}
                                    <select name="rombel_id" id="rombel_id" class="form-select">
                                        <option value="" selected disabled>Rombel Siswa</option>
                                        @foreach ($rombel as $d)
                                            <option value="{{ $d->id }}">{{ $d->rombel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="rayon" id="rayon" class="form-select">
                                        <option value="" selected disabled>Pilih Rayon Siswa</option>
                                       <option value="Al-Ikrom 3">Al-Ikrom 3</option>
                                       <option value="Al-Ikrom 2">Al-Ikrom 2</option>
                                       <option value="Al-Ikrom 1">Al-Ikrom 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="jk" id="jk" class="form-select">
                                        <option value="" selected disabled>Jenis Kelamin</option>
                                       <option value="Laki-Laki">Laki-Laki</option>
                                       <option value="Perempuan">Perempuan</option>
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
@extends('layouts.master')

@section('title', 'Siswa')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Edit Siswa</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nis" name="nis"
                                        placeholder="Nis Siswa" value="{{ $siswa->nis }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Siswa" value="{{ $siswa->nama }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rombel" name="rombel"
                                        placeholder="Rombel" value="{{ $siswa->rombel }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="rayon" name="rayon"
                                        placeholder="Rayon" value="{{ $siswa->rayon }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="jk" name="jk"
                                        placeholder="Jenis Kelamin" value="{{ $siswa->jk }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
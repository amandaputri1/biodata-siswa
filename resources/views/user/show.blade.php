@extends('layouts.master')
@section('title','siswa')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <div class="card-body">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="number" class=" form-control" name="nis" id="nis" placeholder="Masukan NIS" value="{{ $siswas[0]->nis }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class=" form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $siswas[0]->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal lahir">Tanggal lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="kode" placeholder="Masukan Tanggal lahir" value="{{ $siswas[0]->tanggal_lahir }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="custom-select" name="jenis_kelamin" disabled>
                                    <option selected disabled>{{ $siswas[0]->jenis_kelamin }}</option>
                                    <option value="L">LAKI-LAKI</option>
                                    <option value="P">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="custom-select" name="jurusan" disabled>
                                    <option selected disabled>{{ $siswas[0]->jurusan }}</option>
                                    <option value="RPL">RPL</option>
                                    <option value="DPIB">DPIB</option>
                                    <option value="TP">TP</option>
                                    <option value="TFLM">TFLM</option>
                                    <option value="TEI">TEI</option>
                                    <option value="TITL">TITL</option>
                                    <option value="TKJ">TKJ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat"  disabled>{{ $siswas[0]->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="custom-select" name="agama"  disabled>
                                    <option selected disabled>{{ $siswas[0]->agama }}</option>
                                    <option value="ISLAM">Islam</option>
                                    <option value="KRISTEN">Kristen</option>
                                    <option value="KATOLIK">Katolik</option>
                                    <option value="BUDDHA">Buddha</option>
                                    <option value="KONG HU CHU">Kong Hu Chu</option>
                                </select>
                            </div>
                        </div>
                                
                            

                            


                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
 @endsection
@extends('template.admin')
@section('title', 'Edit Jaringan Distribusi')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Jardis dan Gardis</h4>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Jaringan Distribusi</a></li>
        <li class="nav-item"><a class="nav-link" href="/gardis/edit/1">Gardu Distribusi</a></li>
    </ul>
    <div class="card-body">
        <form class="forms-sample">
            @csrf
            <!-- Unit kerja PLN -->
            <div class="form-group row">
                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja" name="unit_kerja">
                        <option value="" disabled>Pilih Unit Kerja PLN</option>
                        <option value="uk1" selected>Unit kerja 1</option>
                        <option value="uk2">Unit kerja 2</option>
                    </select>
                </div>
            </div>
            <!-- Area -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Area*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="area" name="area">
                        <option value="" disabled>Pilih Area</option>
                        <option value="a1 selected">Area 1</option>
                        <option value="a2">Area 2</option>
                    </select>
                </div>
            </div>
            <!-- Tahun dan Bulan -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-12 col-form-label">Tahun*</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <select class="form-control" id="tahun" name="tahun">
                                <option value="" disabled>Year</option>
                                <option value="2019" selected>2019</option>
                                <option value="2019">2018</option>
                            </select>
                        </div>
                        <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="bulan" name="bulan">
                                <option value="" disabled>Pilih Bulan</option>
                                <option value="Januari" selected>Januari</option>
                                <option value="Februari">Februari</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tipe Jaringan Distribusi -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Tipe Jaringan Distribusi*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja" name="tipe_jaringan_distribusi">
                        <option value="" disabled>Pilih Tipe Jaringan Distribusi</option>
                        <option value="Tipe jaringan A" selected>Tipe jaringan A</option>
                        <option value="Tipe jaringan B">Tipe jaringan B</option>
                    </select>
                </div>
            </div>
            <!-- Panjang Jaringan -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Panjang Jaringan*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="area" placeholder="Masukkan Panjang Jaringan" name="panjang_jaringan" value="1412">
                </div>
            </div>
            <div class="text-center">
                <a href="/jardisdangardis" class="btn btn-secondary" name="back">Kembali</a>
                <input type="submit" class="btn btn-success mr-2" name="submit" value="Simpan">
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
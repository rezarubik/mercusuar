@extends('template.admin')
@section('title', 'Input Gardu Distribusi')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Jardis dan Gardis</h4>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="/jardis/add">Jaringan Distribusi</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Gardu Distribusi</a></li>
    </ul>
    <div class="card-body">
        <form class="forms-sample">
            @csrf
            <!-- Unit kerja PLN -->
            <div class="form-group row">
                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja" name="unit_kerja">
                        <option value="" selected disabled>Pilih Unit Kerja PLN</option>
                        <option value="uk1">Unit kerja 1</option>
                        <option value="uk2">Unit kerja 2</option>
                    </select>
                </div>
            </div>
            <!-- Area -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Area*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="area" name="area">
                        <option value="" selected disabled>Pilih Area</option>
                        <option value="a1">Area 1</option>
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
                                <option value="" selected disabled>Year</option>
                                <option value="2019">2019</option>
                                <option value="2019">2018</option>
                            </select>
                        </div>
                        <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="bulan" name="bulan">
                                <option value="" selected disabled>Month</option>
                                <option value="Month">Month</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tipe Jaringan Distribusi -->
            <div class="form-group row">
                <label for="ju" class="col-sm-3 col-form-label">Jumlah Unit*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ju" placeholder="Masukkan Jumlah Unit" name="jumlah_unit">  
                </div>
            </div>
            <!-- Panjang Jaringan -->
            <div class="form-group row">
                <label for="kgd" class="col-sm-3 col-form-label">Kapasitas Gardu Distribusi (MVA)*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kgd" placeholder="Masukkan Kapasitas Gardu Distribusi (MVA)" name="kapasitas_gardis">
                </div>
            </div>
            <div class="text-center">
                <a href="/jardisdangardis" class="btn btn-secondary" name="back">Kembali</a>
                <button type="submit" class="btn btn-success mr-2" name="submit">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
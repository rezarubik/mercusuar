@extends('template.admin')
@section('title', 'Input Neraca')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
        </ul>
        <form class="forms-sample">
            <!-- Unit kerja PLN -->
            <div class="form-group row">
                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja">
                        <option value="uk1">Unit kerja 1</option>
                        <option value="uk2">Unit kerja 2</option>
                    </select>
                </div>
            </div>
            <!-- Area -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Area*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja">
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
                            <select class="form-control" id="tahun">
                                <option value="2019">2019</option>
                                <option value="2019">2018</option>
                            </select>
                        </div>
                        <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="bulan">
                                <option value="Month">Month</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tipe Jaringan Distribusi -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Area*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja">
                        <option value="a1">Area 1</option>
                        <option value="a2">Area 2</option>
                    </select>
                </div>
            </div>
            <!-- Panjang Jaringan -->
            <div class="form-group row">
                <label for="area" class="col-sm-3 col-form-label">Panjang Jaringan*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="area" placeholder="Masukkan Panjang Jaringan">
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
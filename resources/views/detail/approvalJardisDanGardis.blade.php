@extends('template.admin')
@section('title', 'Approval Jardis dan Gardis')
@section('content')

<h4 class="card-title">Approval Jardis dan Gardis</h4>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">

        <!-- Jaringan Distribusi -->
        <div class="card-header">
            <h5 class="card-title">Jaringan Distribusi</h5>
        </div>
        <div class="card-body">
            <form class="forms-sample">
                @csrf
                <!-- Unit kerja PLN -->
                <div class="form-group row">
                    <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="unit_kerja" name="unit_kerja" disabled>
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
                        <select class="form-control" id="area" name="area" disabled>
                            <option value="" disabled>Pilih Area</option>
                            <option value="a1" selected>Area 1</option>
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
                                <select class="form-control" id="tahun" name="tahun" disabled>
                                    <option value="" disabled>Year</option>
                                    <option value="2019" selected>2019</option>
                                    <option value="2019">2018</option>
                                </select>
                            </div>
                            <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="bulan" name="bulan" disabled>
                                    <option value="" disabled>Month</option>
                                    <option value="Januari" selected>Januari</option>
                                    <option value="Februari">Februari</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tipe Jaringan Distribusi -->
                <div class="form-group row">
                    <label for="ju" class="col-sm-3 col-form-label">Jumlah Unit*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="ju" placeholder="Masukkan Jumlah Unit" name="jumlah_unit" value="2144" disabled>
                    </div>
                </div>
                <!-- Panjang Jaringan -->
                <div class="form-group row">
                    <label for="kgd" class="col-sm-3 col-form-label">Kapasitas Gardu Distribusi (MVA)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kgd" placeholder="Masukkan Kapasitas Gardu Distribusi (MVA)" name="kapasitas_gardis" value="2144" disabled>
                    </div>
                </div>
            </form>
        </div>

        <!-- Gardu Distribusi -->
        <div class="card-header">
            <h5 class="card-title">Gardu Distribusi</h5>
        </div>
        <div class="card-body">
            <form class="forms-sample">
                @csrf
                <!-- Unit kerja PLN -->
                <div class="form-group row">
                    <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="unit_kerja" name="unit_kerja" disabled>
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
                        <select class="form-control" id="area" name="area" disabled>
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
                                <select class="form-control" id="tahun" name="tahun" disabled>
                                    <option value="" disabled>Year</option>
                                    <option value="2019" selected>2019</option>
                                    <option value="2019">2018</option>
                                </select>
                            </div>
                            <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="bulan" name="bulan" disabled>
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
                        <select class="form-control" id="unit_kerja" name="tipe_jaringan_distribusi" disabled>
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
                        <input type="text" class="form-control" id="area" placeholder="Masukkan Panjang Jaringan" name="panjang_jaringan" value="1412" disabled>
                    </div>
                </div>

                <!-- Catatan -->
                <div class="form-group row">
                    <label for="catatan" class="col-sm-3 col-form-label">Catatan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Masukkan Catatan" id="catatan" rows="10" name="catatan"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="text-center">
                    <a href="/jardisdangardis" class="btn btn-secondary" name="back">Tidak</a>
                    <input type="submit" class="btn btn-success mr-2" name="submit" value="Setuju">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
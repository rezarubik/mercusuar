@extends('template.admin')
@section('title', 'Input Pelanggan Penjualan')
@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <h4 class="card-title" style="background-color: green; color:#ffffff; padding:20px;">Input Pelanggan Penjualan</h4>
        <div class="card-body">
            <form class="forms-sample">
                <div class="form-group row">
                    <label for="profinsi" class="col-sm-3 col-form-label">Provinsi*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>Pilih Provinsi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profinsi" class="col-sm-3 col-form-label">Kabupaten/Kota*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>Pilih Kabupaten/Kota</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profinsi" class="col-sm-3 col-form-label">Kecamatan*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="profinsi" class="col-sm-3 col-form-label">Desa*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>Pilih Desa</option>
                        </select>
                    </div>
                </div>
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
                <div class="form-group row">
                    <label for="profinsi" class="col-sm-3 col-form-label">Golongan Tarif*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>Pilih Golongan Tarif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlahPelanggan" class="col-sm-3 col-form-label">Jumlah Pelanggan*</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="jumlahPelanggan" placeholder="Masukan Jumlah Pelanggan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalPenjualan(KWH)" class="col-sm-3 col-form-label">Total Penjualan (KWH)*</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="totalPenjualan(KWH)" placeholder="Masukan Total Penjualan (KWH)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalPenjualan(PTL)" class="col-sm-3 col-form-label">Total Penjualan (PTL)*</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="totalPenjualan(PTL)" placeholder="Masukan Total Penjualan (PTL)*">
                    </div>
                </div>
                <div class="text-center">
                    <a href="/pelangganPenjualan" class="btn btn-warning mr-2">Kembali</a>
                    <a href="/pelangganPenjualan/store" class="btn btn-primary">Simpan</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
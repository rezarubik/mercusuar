@extends('template.admin')
@section('title', 'View Pelanggan Penjualan')
@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <div class="card-title" style="background-color: green; color:#ffffff; padding:20px;">
            Approval Pelanggan Penjualan
            <div class="float-right"><a class="btn" href="/pelangganPenjualan" style="color:#ffffff;">X</a></div>
        </div>
        <div class="card-body">
            <form class="forms-sample">
                <fieldset disabled="disabled">
                    <div class="form-group row">
                        <label for="profinsi" class="col-sm-3 col-form-label">Provinsi*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Jawa Tengah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="profinsi" class="col-sm-3 col-form-label">Kabupaten/Kota*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Yogyakarta</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="profinsi" class="col-sm-3 col-form-label">Kecamatan*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Sumenep</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="profinsi" class="col-sm-3 col-form-label">Desa*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                <option>Bango Dua</option>
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
                                <option>Golongan Tarif A</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlahPelanggan" class="col-sm-3 col-form-label">Jumlah Pelanggan*</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control disable" id="jumlahPelanggan" placeholder="5421">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalPenjualan(KWH)" class="col-sm-3 col-form-label">Total Penjualan (KWH)*</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="totalPenjualan(KWH)" placeholder="645">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalPenjualan(PTL)" class="col-sm-3 col-form-label">Total Penjualan (PTL)*</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="totalPenjualan(PTL)" placeholder="4353416">
                        </div>
                    </div>
                </fieldset>
                <hr style="width:100%;">
                <div class="row">
                    <label for="exampleTextarea1" class="col-sm-3 col-form-label">Textarea</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="exampleTextarea1" rows="10" placeholder="Masukan Catatan"></textarea>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/pelangganPenjualan" class="btn btn-secondary mr-2">Tidak</a>
                    <a href="/pelangganPenjualan" class="btn btn-warning">Setuju</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
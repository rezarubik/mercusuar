@extends('template.admin')
@section('title', 'Input Pelanggan Penjualan')
@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <h4 class="card-title" style="background-color: green; color:#ffffff; padding:20px;">Input Rencana Target Road Map Lisdes</h4>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/roadMapLisdes/add">Rencana Target</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/roadMapLisdes/add/realisasi">Realisasi</a>
                </li>
            </ul>
            <form class="mt-3 forms-sample">
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
                    <label for="desa" class="col-sm-3 col-form-label">Desa*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="desa">
                            <option>Pilih Desa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipePembangkit" class="col-sm-3 col-form-label">Tipe Pembangkit*</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="tipePembangkit">
                            <option>Pilih Desa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetPembangkit(KWP)" class="col-sm-3 col-form-label">Target Pembangkit(KWP)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetPembangkit(KWP)" placeholder="Masukan Target Pembangkit (KWP)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetPembangkit(Biaya)" class="col-sm-3 col-form-label">Target Pembangkit(Biaya)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetPembangkit(Biaya)" placeholder="Masukan Target Pembangkit (Biaya)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetJTM(KMS)" class="col-sm-3 col-form-label">Target JTM(KMS)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetJTM(KMS)" placeholder="Masukan Target JTM (KMS)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetJTM(Biaya)" class="col-sm-3 col-form-label">Target JTM(Biaya)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetJTM(Biaya)" placeholder="Masukan Target JTM (Biaya)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetJTR(KMS)" class="col-sm-3 col-form-label">Target JTR(KMS)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetJTR(KMS)" placeholder="Masukan Target JTR (KMS)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetJTR(Biaya)" class="col-sm-3 col-form-label">Target JTR(Biaya)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetJTR(Biaya)" placeholder="Masukan Target JTR (Biaya)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetGardu(Unit)" class="col-sm-3 col-form-label">Target Gardu(Unit)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetGardu(Unit)" placeholder="Masukan Target Gardu (Unit)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetGardu(KVA)" class="col-sm-3 col-form-label">Target Gardu(KVA)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetGardu(KVA)" placeholder="Masukan Target Gardu (KVA)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetGardu(Biaya)" class="col-sm-3 col-form-label">Target Gardu(Biaya)*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetGardu(Biaya)" placeholder="Masukan Target Gardu (Biaya)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="targetPelanggan" class="col-sm-3 col-form-label">Target Pelanggan*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="targetPelanggan" placeholder="Masukan Target Pelanggan">
                    </div>
                </div>
                <div class="text-center">
                    <a href="/roadMapLisdes" class="btn btn-warning mr-2">Kembali</a>
                    <a href="/roadMapLisdes/store" class="btn btn-primary">Simpan</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
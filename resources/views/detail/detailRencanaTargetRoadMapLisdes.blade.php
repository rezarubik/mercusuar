@extends('template.admin')
@section('title', 'View Rencana Target Road Map Lisdes')
@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <h4 class="card-title" style="background-color: green; color:#ffffff; padding:20px;">View Rencana Target Road Map Lisdes</h4>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/roadMapLisdes/add">Rencana Target</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/roadMapLisdes/add/realisasi">Realisasi</a>
                </li>
            </ul>
            <fieldset disabled="disabled">
                <form class="mt-3 forms-sample">
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
                                <option>Sudimara</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desa" class="col-sm-3 col-form-label">Desa*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="desa">
                                <option>Bango Dua</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipePembangkit" class="col-sm-3 col-form-label">Tipe Pembangkit*</label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-lg" id="tipePembangkit">
                                <option>PLTA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetPembangkit(KWP)" class="col-sm-3 col-form-label">Target Pembangkit(KWP)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetPembangkit(KWP)" value="178">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetPembangkit(Biaya)" class="col-sm-3 col-form-label">Target Pembangkit(Biaya)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetPembangkit(Biaya)" value="189902">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetJTM(KMS)" class="col-sm-3 col-form-label">Target JTM(KMS)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetJTM(KMS)" value="455">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetJTM(Biaya)" class="col-sm-3 col-form-label">Target JTM(Biaya)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetJTM(Biaya)" value="1263333">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetJTR(KMS)" class="col-sm-3 col-form-label">Target JTR(KMS)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetJTR(KMS)" value="543">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetJTR(Biaya)" class="col-sm-3 col-form-label">Target JTR(Biaya)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetJTR(Biaya)" value="74554543">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetGardu(Unit)" class="col-sm-3 col-form-label">Target Gardu(Unit)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetGardu(Unit)" value="5">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetGardu(KVA)" class="col-sm-3 col-form-label">Target Gardu(KVA)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetGardu(KVA)" value="754">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetGardu(Biaya)" class="col-sm-3 col-form-label">Target Gardu(Biaya)*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetGardu(Biaya)" value="4324242535">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="targetPelanggan" class="col-sm-3 col-form-label">Target Pelanggan*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="targetPelanggan" value="1434">
                        </div>
                    </div>
            </fieldset>
            <div class="text-center">
                <a href="/roadMapLisdes" class="btn btn-warning mr-2">Kembali</a>
                <a href="/roadMapLisdes/store" class="btn btn-primary">Simpan</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
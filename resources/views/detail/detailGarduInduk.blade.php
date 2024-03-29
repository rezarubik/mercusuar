@extends('template.admin')
@section('title', 'View Gardu Induk')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Gardu Induk</h4>
                  <form class="forms-sample">
                  <div class="card-body">
                  <fieldset disabled="disabled">
                  <div class="form-group">
                    <label for="FormProvinsi">Provinsi*</label>
                    <select class="form-control Provinsi" id="FormProvinsi" >
                      <option>Jawa Barat</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormNamaGardu">Nama Gardu*</label>
                      <input type="text" class="form-control Nama Gardu" id="FormNamaGardu" value="Gardu Gandul">
                    </div>
                    <div class="form-group">
                      <label for="FormKapasitas">Kapasitas (MVA)*</label>
                      <input type="text" class="form-control Kapasitas" id="FormKapasitas" value="300.0000 MVA">
                    </div>
                    <div class="form-group">
                      <label for="FormTegangan">Tengangan (KV)*</label>
                      <input type="text" class="form-control Tengangan" id="FormTegangan" value="30.000 KV">
                    </div>
                  <div class="form-group">
                    <label for="FormTipeGardu">Tipe Gardu Induk*</label>
                    <select class="form-control Tipe Gardu" id="FormTipeGardu">
                      <option>Gardu Induk 1</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormJenisGardu">Jenis Gardu Induk*</label>
                    <select class="form-control Jenis Gardu" id="FormJenisGardu">
                      <option>Gardu LNG</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormUnitTrafo">Jumlah Unit Trafo*</label>
                      <input type="text" class="form-control Unit Trafo" id="FormUnitTrafo" value="77">
                    </div>
                    <div class="form-group">
                      <label for="FormKapasitasTrafo">Kapasitas Trafo (MVA)*</label>
                      <input type="text" class="form-control Kapasitas Trafo" id="FormKapasitasTrafo" value="50000 MVA">
                    </div>
                    <div class="form-group">
                    <label for="FormStatusKepemilikan">Status Kepemilikan*</label>
                    <select class="form-control Status Kepemilikan" id="FormStatusKepemilikan">
                      <option>Milik PLN</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormStatusOperasi">Status Operasi*</label>
                    <select class="form-control Status Operasi" id="FormStatusOperasi">
                      <option>Beroperasi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormTahunMulai">Tahun Mulai Operasi*</label>
                    <select class="form-control Tahun Mulai" id="FormTahunMulai">
                      <option>2000</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="FormLatitude">Latitude*</label>
                      <input type="text" class="form-control Latitude" id="FormLatitude" value="347111722213">
                    </div>
                    <div class="form-group">
                      <label for="FormLongitude">Longitude*</label>
                      <input type="text" class="form-control Longitude" id="FormLongitude" value="432551722214">
                    </div>
                    </fieldset>
                    <div class="float-right">
                    <a href="/gardu_induk" class="btn btn-warning mr-2">Kembali</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection
@extends('template.admin')
@section('title', 'Approval Jaringan Transmisi')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Approval Jaringan Transmisi</h4>
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
                    <label for="FormRegion">Region*</label>
                    <select class="form-control Region" id="FormRegion">
                      <option>Unit 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormJalurTransmisi">Nama Jalur Transmisi*</label>
                      <input type="text" class="form-control Jalur Transmisi" id="FormJalurTransmisi" placeholder="Jalur Timur">
                    </div>
                  <div class="form-group">
                    <label for="FormJenisTegangan">Jenis Tegangan</label>
                    <select class="form-control Jenis Tegangan" id="FormJenisTegangan">
                      <option>Tegangan Udara Super Tinggi</option>
                    </select>
                  </div>
                    <div class="form-group">
                    <div class="form-group">
                      <label for="FormTegangan">Tengangan (KV)*</label>
                      <input type="text" class="form-control Tengangan" id="FormTegangan" placeholder="3000000 KV">
                    </div>
                      <label for="FormPanjangJaringan">Panjang Jaringan (KMS)*</label>
                      <input type="text" class="form-control Panjang Jaringan" id="FormPanjangJaringan" placeholder="300000 KMS">
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
                      <label for="FormNamaTower">Nama Tower*</label>
                      <input type="text" class="form-control Nama Tower" id="FormNamaTower" placeholder="Tower PLN">
                    </div>
                    <div class="form-group">
                      <label for="FormLatitude">Latitude*</label>
                      <input type="text" class="form-control Latitude" id="FormLatitude" placeholder="123123777290">
                    </div>
                    <div class="form-group">
                      <label for="FormLongitude">Longitude*</label>
                      <input type="text" class="form-control Longitude" id="FormLongitude" placeholder="332123777223">
                    </div>
                    </fieldset>
                    <div class="form-group">
                      <label for="FormCatatan">Catatan*</label>
                      <input type="text" class="form-control Catatan" id="FormCatatan" placeholder="Masukan Catatan">
                    </div>
                    <div class="float-right">
                    <a href="/jaringan_transmisi" class="btn btn-warning mr-2">Tidak</a>
                    <a href="/jaringan_transmisi" class="btn btn-success ">Setuju</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection
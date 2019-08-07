@extends('template.admin')
@section('title', 'Input Gardu Induk')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Gardu Induk</h4>
                  <form class="forms-sample">
                  <div class="card-body">
                  <div class="form-group">
                    <label for="FormProvinsi">Provinsi*</label>
                    <select class="form-control Provinsi" id="FormProvinsi" >
                      <option>Jawa Barat</option>
                      <option>Jawa Tengah</option>
                      <option>Jawa Timur</option>
                      <option>DKI Jakarta</option>
                      <option>Bali</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormNamaGardu">Nama Gardu*</label>
                      <input type="text" class="form-control Nama Gardu" id="FormNamaGardu" placeholder="Masukan Nama Gardu">
                    </div>
                    <div class="form-group">
                      <label for="FormKapasitas">Kapasitas (MVA)*</label>
                      <input type="text" class="form-control Kapasitas" id="FormKapasitas" placeholder="Masukan Kapasitas (MVA)">
                    </div>
                    <div class="form-group">
                      <label for="FormTegangan">Tengangan (KV)*</label>
                      <input type="text" class="form-control Tengangan" id="FormTegangan" placeholder="Masukan Tegangan (KV)">
                    </div>
                  <div class="form-group">
                    <label for="FormTipeGardu">Tipe Gardu Induk*</label>
                    <select class="form-control Tipe Gardu" id="FormTipeGardu">
                      <option>Gardu Induk 1</option>
                      <option>Gardu Induk 2</option>
                      <option>Gardu Induk 3</option>
                      <option>Gardu Induk 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormJenisGardu">Jenis Gardu Induk*</label>
                    <select class="form-control Jenis Gardu" id="FormJenisGardu">
                      <option>Gardu Batu Bara</option>
                      <option>Gardu LNG</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormUnitTrafo">Jumlah Unit Trafo*</label>
                      <input type="text" class="form-control Unit Trafo" id="FormUnitTrafo" placeholder="Masukan Jumlah Unit Trafo">
                    </div>
                    <div class="form-group">
                      <label for="FormKapasitasTrafo">Kapasitas Trafo (MVA)*</label>
                      <input type="text" class="form-control Kapasitas Trafo" id="FormKapasitasTrafo" placeholder="Masukan Kapasitas Trafo (MVA)">
                    </div>
                    <div class="form-group">
                    <label for="FormStatusKepemilikan">Status Kepemilikan*</label>
                    <select class="form-control Status Kepemilikan" id="FormStatusKepemilikan">
                      <option>Milik PLN</option>
                      <option>Milik BUMN Lain</option>
                      <option>Milik Negara</option>
                      <option>Milik Pihak Swasta</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormStatusOperasi">Status Operasi*</label>
                    <select class="form-control Status Operasi" id="FormStatusOperasi">
                      <option>Beroperasi</option>
                      <option>Tidak Beroperasi</option>
                      <option>Rusak</option>
                      <option>Pensiun</option>
                      <option>Hilang</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="FormTahunMulai">Tahun Mulai Operasi*</label>
                    <select class="form-control Tahun Mulai" id="FormTahunMulai">
                      <option>2000</option>
                      <option>2005</option>
                      <option>2010</option>
                      <option>2015</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="FormLatitude">Latitude*</label>
                      <input type="text" class="form-control Latitude" id="FormLatitude" placeholder="Masukan Latitude">
                    </div>
                    <div class="form-group">
                      <label for="FormLongitude">Longitude*</label>
                      <input type="text" class="form-control Longitude" id="FormLongitude" placeholder="Masukan Longitude">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Simpan</button>
                    <button class="btn btn-light">Kembali</button>
                  </form>
                </div>
              </div>
            </div>
@endsection
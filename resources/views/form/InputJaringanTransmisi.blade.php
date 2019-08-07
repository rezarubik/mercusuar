@extends('template.admin')
@section('title', 'Input Jaringan Transmisi')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Jaringan Transmisi</h4>
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
                    <label for="FormRegion">Region*</label>
                    <select class="form-control Region" id="FormRegion">
                      <option>Unit 1</option>
                      <option>Unit 2</option>
                      <option>Unit 3</option>
                      <option>Unit 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="FormJalurTransmisi">Nama Jalur Transmisi*</label>
                      <input type="text" class="form-control Jalur Transmisi" id="FormJalurTransmisi" placeholder="Masukan Nama Jalur Transmisi">
                    </div>
                  <div class="form-group">
                    <label for="FormJenisTegangan">Jenis Tegangan</label>
                    <select class="form-control Jenis Tegangan" id="FormJenisTegangan">
                      <option>Tegangan Udara Super Tinggi</option>
                      <option>Tegangan Udara Tinggi</option>
                      <option>Tegangan Udara Menengah</option>
                      <option>Tegangan Udara Kecil</option>
                      <option>Tegangan Kabel</option>
                    </select>
                  </div>
                    <div class="form-group">
                    <div class="form-group">
                      <label for="FormTegangan">Tengangan (KV)*</label>
                      <input type="text" class="form-control Tengangan" id="FormTegangan" placeholder="Masukan Tegangan (KV)">
                    </div>
                      <label for="FormPanjangJaringan">Panjang Jaringan (KMS)*</label>
                      <input type="text" class="form-control Panjang Jaringan" id="FormPanjangJaringan" placeholder="Masukan Panjang Jaringan (KMS)">
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
                      <label for="FormNamaTower">Nama Tower*</label>
                      <input type="text" class="form-control Nama Tower" id="FormNamaTower" placeholder="Masukan Nama Tower">
                    </div>
                    <div class="form-group">
                      <label for="FormLatitude">Latitude*</label>
                      <input type="text" class="form-control Latitude" id="FormLatitude" placeholder="Masukan Latitude">
                    </div>
                    <div class="form-group">
                      <label for="FormLongitude">Longitude*</label>
                      <input type="text" class="form-control Longitude" id="FormLongitude" placeholder="Masukan Longitude">
                    </div>
                    <a href="/jaringan_transmisi" class="btn btn-warning mr-2">Kembali</a>
                    <a href="/jaringan_transmisi" class="btn btn-primary">Simpan</a>
                  </form>
                </div>
              </div>
            </div>
@endsection
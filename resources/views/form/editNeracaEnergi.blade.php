@extends('template.admin')
@section('title', 'Edit Neraca Energi')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Neraca Energi</h4>
    </div>
    <div class="card-body">
        <form class="forms-sample">
            @csrf
            <!-- Unit kerja input -->
            <div class="form-group row">
                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja PLN*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja">
                        <option value="" disabled>Pilih Unit Kerja PLN</option>
                        <option value="uk1" selected>Unit kerja A</option>
                        <option value="uk2">Unit kerja B</option>
                    </select>
                </div>
            </div>
            <!-- Tahun* dan Bulan-->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-12 col-form-label">Tahun*</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <select class="form-control" id="tahun" >
                                <option value="" disabled>Year</option>
                                <option value="2019" selected>2019</option>
                                <option value="2019">2018</option>
                            </select>
                        </div>
                        <label for="bulan" class="col-sm-4 col-form-label">Bulan*</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="bulan">
                                <option value="" disabled>Month</option>
                                <option value="Januari" selected>Januari</option>
                                <option value="Februari">Februari</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Beli (MWH)*-->
            <div class="form-group row">
                <label for="beli" class="col-sm-3 col-form-label">Beli (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Beli" id="beli" value="56431">
                </div>
            </div>
            <!-- Sewa (MWH)*-->
            <div class="form-group row">
                <label for="sewa" class="col-sm-3 col-form-label">Sewa (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Sewa" id="sewa" value="2343">
                </div>
            </div>
            <!-- Terima (MWH)*-->
            <div class="form-group row">
                <label for="terima" class="col-sm-3 col-form-label">Terima (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Terima" id="terima" value="5234">
                </div>
            </div>
            <!-- Produksi sendiri (MWH)*-->
            <div class="form-group row">
                <label for="produksi" class="col-sm-3 col-form-label">Produksi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Produksi Sendiri (MWH)" id="produksi" value="2190">
                </div>
            </div>
            <!-- Pmk. Sendiri Sentral (MWH)* -->
            <div class="form-group row">
                <label for="pmk" class="col-sm-3 col-form-label">Pmk. Sendiri Sentral (MWH)*</label>
                <div class="col-sm-9">
                    <input type="nunmber" class="form-control" placeholder="Masukkan Pmk. Sendiri Sentral (MWH)" id="pmk" value="2321">
                </div>
            </div>
            <!-- Netto (MWH)* -->
            <div class="form-group row">
                <label for="netto" class="col-sm-3 col-form-label">Netto (MWH)*</label>
                <div class="col-sm-9">
                    <input type="nunmber" class="form-control" placeholder="Masukkan Netto (MWH)" id="netto" value="636">
                </div>
            </div>
            <!-- PSGI (MWH)* -->
            <div class="form-group row">
                <label for="psgi" class="col-sm-3 col-form-label">PSGI (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan PSGI (MWH)" id="psgi" value="6341">
                </div>
            </div>
            <!-- SST Transmisi (MWH)*-->
            <div class="form-group row">
                <label for="sst" class="col-sm-3 col-form-label">SST Transmisi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Transmisi (MWH)" id="sst" value="41312">
                </div>
            </div>
            <!-- SST Transmisi (%)* -->
            <div class="form-group row">
                <label for="sst1" class="col-sm-3 col-form-label">SST Transmisi (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Transmisi" id="sst1" value="75">
                </div>
            </div>
            <!-- Kirim Antar Unit (MWH)* -->
            <div class="form-group row">
                <label for="kau" class="col-sm-3 col-form-label">Kirim Antar Unit (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Kirim Antar Unit (MWH)" id="kau" value="4324">
                </div>
            </div>
            <!-- Kirim Keluar PLN (MWH)* -->
            <div class="form-group row">
                <label for="kkpln" class="col-sm-3 col-form-label">Kirim Keluar PLN (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Kirim Keluar PLN (MWH)" id="kkpln" value="6464">
                </div>
            </div>
            <!-- Disalurkan ke Distribusi (%)* -->
            <div class="form-group row">
                <label for="dkd" class="col-sm-3 col-form-label">Disalurkan ke Distribusi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Disalurkan ke Distribusi (MWH)" id="dkd" value="4577">
                </div>
            </div>
            <!-- PSSD (MWH)* -->
            <div class="form-group row">
                <label for="pssd" class="col-sm-3 col-form-label">PSSD (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan PSSD(MWH)" id="pssd" value="4131">
                </div>
            </div>
            <!-- SST Distribusi (MWH)* -->
            <div class="form-group row">
                <label for="sstd" class="col-sm-3 col-form-label">SST Distribusi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Distribusi" id="sstd" value="5212">
                </div>
            </div>
            <!-- SST Distribusi (%)* -->
            <div class="form-group row">
                <label for="sstd1" class="col-sm-3 col-form-label">SST Distribusi (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Distribusi" id="sstd1" value="7365">
                </div>
            </div>
            <!-- SST Jaringan (MWH)* -->
            <div class="form-group row">
                <label for="sstj" class="col-sm-3 col-form-label">SST Jaringan (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Jaringan (MWH)" id="sstj"  value="6422">
                </div>
            </div>
            <!-- SST Jaringan (%)* -->
            <div class="form-group row">
                <label for="sstj1" class="col-sm-3 col-form-label">SST Jaringan (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Jaringan" id="sstj1"  value="6345">
                </div>
            </div>
            <!-- Pemakaian -->
            <div class="form-group row">
                <label for="pemakaian" class="col-sm-3 col-form-label">Pemakaian</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Pemakaian" id="pemakaian"  value="1231">
                </div>
            </div>
            <!-- Dari Proyek (MWH)* -->
            <div class="form-group row">
                <label for="dp" class="col-sm-3 col-form-label">Dari Proyek (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan dari Proyek (MWH)" id="dp"  value="1232">
                </div>
            </div>
            <!-- Ke Proyek (MWH)* -->
            <div class="form-group row">
                <label for="kp" class="col-sm-3 col-form-label">Ke Proyek (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan ke Proyek (MWH)" id="kp"  value="2151">
                </div>
            </div>
            <!-- Button -->
            <div class="text-center">
                <a href="/neracaenergi" class="btn btn-secondary" name="back">Kembali</a>
                <input type="submit" class="btn btn-success mr-2" name="submit" value="Simpan">
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
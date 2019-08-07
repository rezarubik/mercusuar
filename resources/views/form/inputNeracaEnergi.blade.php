@extends('template.admin')
@section('title', 'Input Neraca')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <form class="forms-sample">
            <!-- Unit kerja input -->
            <div class="form-group row">
                <label for="unit_kerja" class="col-sm-3 col-form-label">Unit Kerja*</label>
                <div class="col-sm-9">
                    <select class="form-control" id="unit_kerja">
                        <option value="uk1">Unit kerja 1</option>
                        <option value="uk2">Unit kerja 2</option>
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
            <!-- Beli (MWH)*-->
            <div class="form-group row">
                <label for="beli" class="col-sm-3 col-form-label">Beli (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Beli" id="beli">
                </div>
            </div>
            <!-- Sewa (MWH)*-->
            <div class="form-group row">
                <label for="sewa" class="col-sm-3 col-form-label">Sewa (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Sewa" id="sewa">
                </div>
            </div>
            <!-- Terima (MWH)*-->
            <div class="form-group row">
                <label for="terima" class="col-sm-3 col-form-label">Terima (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Terima" id="terima">
                </div>
            </div>
            <!-- Produksi sendiri (MWH)*-->
            <div class="form-group row">
                <label for="produksi" class="col-sm-3 col-form-label">Produksi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Produksi Sendiri (MWH)" id="produksi">
                </div>
            </div>
            <!-- Pmk. Sendiri Sentral (MWH)* -->
            <div class="form-group row">
                <label for="pmk" class="col-sm-3 col-form-label">Pmk. Sendiri Sentral (MWH)*</label>
                <div class="col-sm-9">
                    <input type="nunmber" class="form-control" placeholder="Masukkan Pmk. Sendiri Sentral (MWH)" id="pmk">
                </div>
            </div>
            <!-- Netto (MWH)* -->
            <div class="form-group row">
                <label for="netto" class="col-sm-3 col-form-label">Netto (MWH)*</label>
                <div class="col-sm-9">
                    <input type="nunmber" class="form-control" placeholder="Masukkan Netto (MWH)" id="netto">
                </div>
            </div>
            <!-- PSGI (MWH)* -->
            <div class="form-group row">
                <label for="psgi" class="col-sm-3 col-form-label">PSGI (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan PSGI (MWH)" id="psgi">
                </div>
            </div>
            <!-- SST Transmisi (MWH)*-->
            <div class="form-group row">
                <label for="sst" class="col-sm-3 col-form-label">SST Transmisi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Transmisi (MWH)" id="sst">
                </div>
            </div>
            <!-- SST Transmisi (%)* -->
            <div class="form-group row">
                <label for="sst1" class="col-sm-3 col-form-label">SST Transmisi (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Transmisi" id="sst1">
                </div>
            </div>
            <!-- Kirim Antar Unit (MWH)* -->
            <div class="form-group row">
                <label for="kau" class="col-sm-3 col-form-label">Kirim Antar Unit (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Kirim Antar Unit (MWH)" id="kau">
                </div>
            </div>
            <!-- Kirim Keluar PLN (MWH)* -->
            <div class="form-group row">
                <label for="kkpln" class="col-sm-3 col-form-label">Kirim Keluar PLN (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Kirim Keluar PLN (MWH)" id="kkpln">
                </div>
            </div>
            <!-- Disalurkan ke Distribusi (%)* -->
            <div class="form-group row">
                <label for="dkd" class="col-sm-3 col-form-label">Disalurkan ke Distribusi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Disalurkan ke Distribusi (MWH)" id="dkd">
                </div>
            </div>
            <!-- PSSD (MWH)* -->
            <div class="form-group row">
                <label for="pssd" class="col-sm-3 col-form-label">PSSD (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan PSSD(MWH)" id="pssd">
                </div>
            </div>
            <!-- SST Distribusi (MWH)* -->
            <div class="form-group row">
                <label for="sstd" class="col-sm-3 col-form-label">SST Distribusi (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Distribusi" id="sstd">
                </div>
            </div>
            <!-- SST Distribusi (%)* -->
            <div class="form-group row">
                <label for="sstd1" class="col-sm-3 col-form-label">SST Distribusi (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Distribusi" id="sstd1">
                </div>
            </div>
            <!-- SST Jaringan (MWH)* -->
            <div class="form-group row">
                <label for="sstj" class="col-sm-3 col-form-label">SST Jaringan (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Jaringan (MWH)" id="sstj">
                </div>
            </div>
            <!-- SST Jaringan (%)* -->
            <div class="form-group row">
                <label for="sstj1" class="col-sm-3 col-form-label">SST Jaringan (%)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan SST Jaringan" id="sstj1">
                </div>
            </div>
            <!-- Pemakaian -->
            <div class="form-group row">
                <label for="pemakaian" class="col-sm-3 col-form-label">Pemakaian</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan Pemakaian" id="pemakaian">
                </div>
            </div>
            <!-- Dari Proyek (MWH)* -->
            <div class="form-group row">
                <label for="dp" class="col-sm-3 col-form-label">Dari Proyek (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan dari Proyek (MWH)" id="dp">
                </div>
            </div>
            <!-- Ke Proyek (MWH)* -->
            <div class="form-group row">
                <label for="kp" class="col-sm-3 col-form-label">Ke Proyek (MWH)*</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Masukkan ke Proyek (MWH)" id="kp">
                </div>
            </div>
            <!-- Button -->
            <div class="text-center">
                <a class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success mr-2">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
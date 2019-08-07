@extends('menu.konsumsiperkapita')

@section('title', 'Approval')

@section('content')
<div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                        <div class="col px-md-5 bg-dark text-white">
                    <h3 class="display-5">View Rencana Perkapita</h3>
                    </div>
                      <form class="forms-sample">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Provinsi*</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Jawa Tengah</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kabupaten/Kota*</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Yogyakarta</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kecamatan*</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Sumenap</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Desa*</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Bango 2</option>
                              <option>Category2</option>
                              <option>Category3</option>
                              <option>Category4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tahun</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="tahun" />
                          </div>
                          <label class="col-sm- col-form-label ">Bulan</label>
                          <div class="col-sm-3">
                          <input type="text" class="form-control" placeholder="Bulan" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jumlah Penduduk*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="123123">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Penjualan PLN (KWH)*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="1525123">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pemakaian Sendiri PLN (KWH)*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="5123">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Penjualan Non PLN (KWH)*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="123123">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pemakaian Sendiri Non PLN(KWH)*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="123123">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Konsumsi Per Kapita (KWH)*</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="5512414">
                          </div>
                        </div>
                        <div class="text-center" >
                        <a class="btn btn-secondary" href="#" role="button">Ya</a>
                        <a class="btn btn-info" href="/perKapita" role="button">Tidak</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

@endsection
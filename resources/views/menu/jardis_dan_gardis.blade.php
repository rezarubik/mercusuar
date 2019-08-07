@extends('template.admin')

@section('title', 'pembangkit')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Jardis dan Gardis</h1>
                  <a href="/jardisdangardis/add" class="btn btn-primary float-right">+Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>    
                          <th>No</th>
                          <th>Unit kerja</th>
                          <th>Area</th>
                          <th>Tahun</th>
                          <th>Bulan</th>
                          <th>Tipe Jaringan Distribusi</th>
                          <th>Panjang Jaringan Distribusi (KMS)</th>
                          <th>Jumlah Unit</th>
                          <th>Kapasitas Gardu Distribusi (MVA)</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>Jawa Tengah</td>
                          <td>Sleman</td>
                          <td>2019</td>
                          <td>Januari</td>
                          <td>Jaringan A</td>
                          <td>6523</td>
                          <td>2290</td>
                          <td>1500</td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <a href="#" class="badge badge-info">Detail</a>
                            <a href="#" class="badge badge-warning">Edit</a>
                            <a href="#" class="badge badge-primary">Approve</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
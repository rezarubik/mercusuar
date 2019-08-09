@extends('template.admin')

@section('title', 'Jardis dan Gardis')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title">Jardis dan Gardis</h1>
    </div>
    <div class="card-body">
      <a href="/jardis/add" class="btn btn-primary float-right">+Tambah</a>
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
                <a href="/jardis/detail/1" class="badge badge-info">Detail</a>
                <a href="/jardis/edit/1" class="badge badge-warning">Edit</a>
                <a data-toggle="modal" data-target="#confirmApprove" class="badge badge-primary">Approve</a>
                <a href="/jardisdangardis/delete/1" class="badge badge-danger">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmApprove" tabindex="-1" role="dialog" aria-labelledby="confirmApprove" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin akan melakukan approve?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a class="btn btn-success" href="/jardisdangardis/approve/1">Ya</a>
      </div>
    </div>
  </div>
</div>
@endsection
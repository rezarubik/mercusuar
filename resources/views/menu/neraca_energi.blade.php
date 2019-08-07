@extends('template.admin')

@section('title', 'pembangkit')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Neraca Energi</h4>
      <a href="/neracaenergi/add" class="btn btn-primary float-right">+Tambah</a>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Unit kerja</th>
              <th>Tahun</th>
              <th>Bulan</th>
              <th>Beli</th>
              <th>Sewa</th>
              <th>Terima</th>
              <th>Produksi sendiri</th>
              <th>PMK Sendiri Sentral</th>
              <th>Netto</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-1">1.</td>
              <td>Unit Kerja A</td>
              <td>2019</td>
              <td>Januari</td>
              <td>56431</td>
              <td>2343</td>
              <td>5234</td>
              <td>2190</td>
              <td>2321</td>
              <td>636</td>
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
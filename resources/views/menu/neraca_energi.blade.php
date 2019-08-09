@extends('template.admin')

@section('title', 'Neraca Energi')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Neraca Energi</h4>
    </div>
    <div class="card-body">
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
              <td>1.</td>
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
                <a href="/neracaenergi/detail/1" class="badge badge-info">Detail</a>
                <a href="/neracaenergi/edit/1" class="badge badge-warning">Edit</a>
                <a data-toggle="modal" class="badge badge-primary" data-target="#confirmApprove">Approve</a>
                <a href="/neracaenergi/delete/1" class="badge badge-danger">Delete</a>
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
        <a class="btn btn-success" href="/neracaenergi/approve/1">Ya</a>
      </div>
    </div>
  </div>
</div>
@endsection
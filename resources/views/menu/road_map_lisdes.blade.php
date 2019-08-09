@extends('template.admin')
@section('title', 'Road Map Lisdes')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-uppercase">Road Map Lisdes</h4>
            <a href="/roadMapLisdes/add" class="btn btn-primary float-right">
                + Tambah Data
            </a>
            <div class="table-responsive text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle">No</th>
                            <th rowspan="2" class="align-middle">Tahun</th>
                            <th rowspan="2" class="align-middle">Bulan</th>
                            <th rowspan="2" class="align-middle">Provinsi</th>
                            <th rowspan="2" class="align-middle">Kab/Kota</th>
                            <th rowspan="2" class="align-middle">Kecamatan</th>
                            <th rowspan="2" class="align-middle">Desa</th>
                            <th rowspan="2" class="align-middle">Tipe Pembangkit</th>
                            <th colspan="2">Pembangkit (KWP)</th>
                            <th colspan="2">JTM (KKM)</th>
                            <th rowspan="2" class="align-middle">Status</th>
                            <th rowspan="2" class="align-middle">Aksi</th>
                        </tr>
                        <tr>
                            <th>Target</th>
                            <th>Realisasi</th>
                            <th>Target</th>
                            <th>Realisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2019</td>
                            <td>Januari</td>
                            <td>Jawa Tengah</td>
                            <td>Sumenep</td>
                            <td>Pare Pare</td>
                            <td>Bango Dua</td>
                            <td>PLTA</td>
                            <td>2321</td>
                            <td>636</td>
                            <td>4231</td>
                            <td>643</td>
                            <td>Draft</td>
                            <td>
                                <a href="/roadMapLisdes/detail" class="badge badge-primary">Detail</a>
                                <a href="/roadMapLisdes/edit" class="badge badge-secondary">Edit</a>
                                <a href="/roadMapLisdes/approval" class="badge badge-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Approval
                                    <!-- <button type="button" data-toggle="modal" data-target=".bd-example-modal-sm"></button> -->
                                </a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Approval Modal -->
<!-- <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <h1>Apakah anda Ingin Approve?</h1>
        </div>
    </div>
</div> -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apakah anda yakin akan memproses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <a type="button" href="/roadMapLisdes" class="btn btn-primary">Tidak</a>
                <!-- <button type="button" class="btn btn-primary"><a href="/roadMapLisdes">Tidak</a></button> -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="/roadMapLisdes/approvalRencanaTargetRoadMapLisdes">Ya</a></button> -->
                <a type="button" href="/roadMapLisdes/approval" class="btn btn-secondary">Ya</a>
            </div>
        </div>
    </div>
</div>
@endsection
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
                                <a href="/roadMapLisdes/approval" class="badge badge-primary">Approval</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('template.admin')
@section('title', 'Pelanggan Penjualan')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pelanggan Penjualan</h4>
            <a href="#" class="btn btn-primary float-right">
                + Tambah Data
            </a>
            <div class="table-responsive mt-3 text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kab/Kota</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Golongan Tarif</th>
                            <th>Jumlah Pelanggan</th>
                            <th>Total Penjualan (KWH)</th>
                            <th>Total Penjualan (KWT)</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Jawa Tengah</td>
                            <td>Yogyakarta</td>
                            <td>Sumenep</td>
                            <td>Slipi</td>
                            <td>2019</td>
                            <td>Januari</td>
                            <td>A</td>
                            <td>2290</td>
                            <td>1500</td>
                            <td>1700</td>
                            <td>Draft</td>
                            <td>
                                <a href="" class="badge badge-primary">Detail</a>
                                <a href="" class="badge badge-secondary">Edit</a>
                                <a href="" class="badge badge-primary">Refresh</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Jawa Tengah</td>
                            <td>Yogyakarta</td>
                            <td>Sumenep</td>
                            <td>Slipi</td>
                            <td>2019</td>
                            <td>Januari</td>
                            <td>A</td>
                            <td>2290</td>
                            <td>1500</td>
                            <td>1700</td>
                            <td>Draft</td>
                            <td>
                                <a href="" class="badge badge-primary">Detail</a>
                                <a href="" class="badge badge-secondary">Edit</a>
                                <a href="" class="badge badge-primary">Refresh</a>
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
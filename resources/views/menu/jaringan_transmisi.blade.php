@extends('template.admin')

@section('title', 'jaringan Transmisi')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">Jaringan Transmisi</h4>
                  <a href="#" class="btn btn-primary">+Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Provinsi
                          </th>
                          <th>
                            Kab/Kota
                          </th>
                          <th>
                            Kecamatan
                          </th>
                          <th>
                            Desa
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Golongan Tarif
                          </th>
                          <th>
                            Jumlah Pelanggan
                          </th>
                          <th>
                            Total Penjualan (KWH)
                          </th>
                          <th>
                            Total Penjualan (PLT)
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td class="py-1">
                            1.
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            Yogyakarta
                          </td>
                          <td>
                            Sumenep
                          </td>
                          <td>
                            Slipi
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Januari
                          </td>
                          <td>
                            A
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td>
                            1700
                          </td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#" class="badge badge-info">Detail</a>
                            <a href="#" class="badge badge-warning">Edit</a>
                            <a href="#" class="badge badge-primary">Refresh</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                          </td>
                          </tr>
                          <tr>
                        <td class="py-1">
                            2.
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            Sleman
                          </td>
                          <td>
                            Kudus
                          </td>
                          <td>
                            Jambe
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Maret
                          </td>
                          <td>
                            A
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td>
                            1700
                          </td>
                          <td><span class="text-success">Approved</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#" class="badge badge-info">Detail</a>
                          </td>
                          </tr>
                          <tr>
                        <td class="py-1">
                            3.
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            Bandung
                          </td>
                          <td>
                            Sarijadi
                          </td>
                          <td>
                            Ciwaruga
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            April
                          </td>
                          <td>
                            A
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td>
                            1700
                          </td>
                          <td><span class="text-success">Approved</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#" class="badge badge-info">Detail</a>
                          </td>
                          </tr>
                          <tr>
                        <td class="py-1">
                            4.
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            Subang
                          </td>
                          <td>
                            Lembang
                          </td>
                          <td>
                            Jonggol
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Mei
                          </td>
                          <td>
                            A
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td>
                            1700
                          </td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#" class="badge badge-info">Detail</a>
                            <a href="#" class="badge badge-warning">Edit</a>
                            <a href="#" class="badge badge-primary">Refresh</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                          </td>
                          </tr>
                          <tr>
                        <td class="py-1">
                            5.
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            Cirebon
                          </td>
                          <td>
                            Arjawinangun
                          </td>
                          <td>
                            Jungjang
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Juni
                          </td>
                          <td>
                            A
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td>
                            1700
                          </td>
                          <td><span class="text-success">Reject</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#" class="badge badge-info">Detail</a>
                          </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
@extends('template.admin')

@section('title', 'Gardu Induk')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gardu Induk</h4>
                  <a href="/gardu_induk/add" class="btn btn-primary">+Tambah Data</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Gardu Induk
                          </th>
                          <th>
                            Provinsi
                          </th>
                          <th>
                            Kapasitas (KVA)
                          </th>
                          <th>
                            Tegangan (KV)
                          </th>
                          <th>
                            Tipe
                          </th>
                          <th>
                            Jenis
                          </th>
                          <th>
                            Status Kepemilikan
                          </th>
                          <th>
                            Status Operasi
                          </th>
                          <th>
                            Tahun Mulai Operasi
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
                            Gardu Induk A
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            532
                          </td>
                          <td>
                            564
                          </td>
                          <td>
                            Tipe A
                          </td>
                          <td>
                            Jenis A
                          </td>
                          <td>
                            Milik Sendiri
                          </td>
                          <td>
                            Operasi
                          </td>
                          <td>
                            2019
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
                            Gardu Induk B
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            532
                          </td>
                          <td>
                            564
                          </td>
                          <td>
                            Tipe A
                          </td>
                          <td>
                            Jenis A
                          </td>
                          <td>
                            Milik Sendiri
                          </td>
                          <td>
                            Operasi
                          </td>
                          <td>
                            2019
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
                        <tr>
                          <td class="py-1">
                            3.
                          </td>
                          <td>
                            Gardu Induk C
                          </td>
                          <td>
                            Jawa Timur
                          </td>
                          <td>
                            532
                          </td>
                          <td>
                            564
                          </td>
                          <td>
                            Tipe A
                          </td>
                          <td>
                            Jenis A
                          </td>
                          <td>
                            Milik Sendiri
                          </td>
                          <td>
                            Operasi
                          </td>
                          <td>
                            2019
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
                            Gardu Induk D
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            532
                          </td>
                          <td>
                            564
                          </td>
                          <td>
                            Tipe A
                          </td>
                          <td>
                            Jenis A
                          </td>
                          <td>
                            Milik Sendiri
                          </td>
                          <td>
                            Operasi
                          </td>
                          <td>
                            2019
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
                            5.
                          </td>
                          <td>
                            Gardu Induk E
                          </td>
                          <td>
                            Jawa Timur
                          </td>
                          <td>
                            532
                          </td>
                          <td>
                            564
                          </td>
                          <td>
                            Tipe A
                          </td>
                          <td>
                            Jenis A
                          </td>
                          <td>
                            Milik Sendiri
                          </td>
                          <td>
                            Operasi
                          </td>
                          <td>
                            2019
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
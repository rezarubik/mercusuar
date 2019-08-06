@extends('template.admin')

@section('title', 'pembangkit')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Jardis dan Gardis</h1>
                  <a href="#" class="btn btn-primary">+Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>    
                          <th>
                            No
                          </th>
                          <th>
                            Unit kerja
                          </th>
                          <th>
                            Area
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Tipe Jaringan Distribusi
                          </th>
                          <th>
                            Panjang Jaringan Distribusi (KMS)
                          </th>
                          <th>
                            Jumlah Unit
                          </th>
                          <th>
                            Kapasitas Gardu Distribusi (MVA)
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
                            Sleman
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Januari
                          </td>
                          <td>
                            Jaringan A
                          </td>
                          <td>
                            6523
                          </td>
                          <td>
                            2290
                          </td>
                          <td>
                            1500
                          </td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="#"><label class="badge badge-info">Detail</label></a>
                            <a href="#"><label class="badge badge-warning">Edit</label></a>
                            <a href="#"><label class="badge badge-primary">Refresh</label></a>
                            <a href="#"><label class="badge badge-danger">Delete</label></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
@extends('template.admin')

@section('title', 'Konsumsi per Kapita')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Komsumsi Perkapita</h4>
                  <a href="/tambahperKapita" class="btn btn-primary float-right">+ Tambah Data</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Provinsi
                          </th>
                          <th>
                            Kab/kota
                          </th>
                          <th>
                            Kecamatan
                          </th>
                          <th>
                            Desa
                          </th>
                          <th>
                            Jumlah Penduduk
                          </th>
                          <th>
                            Penjualan
                          </th>
                          <th>
                            Pemakaian Sendiri
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
                            2019
                          </td>
                          <td>
                            Januari
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            Sumenep
                          </td>
                          <td>
                            Pare-Pare
                          </td>
                          <td>
                            Bango Dua
                          </td>
                          <td>
                            2190
                          </td>
                          <td>
                            2321
                          </td>
                          <td>
                            636
                          </td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <a href="/detailperKapita" class="badge badge-info">detail</a>
                            <a href="/editKapita" class="badge badge-warning">Edit</a>
                            <a href="/approvalKapita" class="badge badge-primary">Approval</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                          </td>
                        </tr>
                        <td class="py-1">
                            2.
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Maret
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            Yogyakarta
                          </td>
                          <td>
                            Pare Pare
                          </td>
                          <td>
                            Bango Dua
                          </td>
                          <td>
                            2189
                          </td>
                          <td>
                            2321
                          </td>
                          <td>
                            636 
                          </td>
                          <td><span class="text-success">Approved</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <!-- <a href="#" class="badge badge-info">detail</a> -->
                          </td>
                          </tr>
                          <tr>
                          <td class="py-1">
                            3.
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Juni
                          </td>
                          <td>
                            Jawa Tengah
                          </td>
                          <td>
                            Pare
                          </td>
                          <td>
                            Pare Pare
                          </td>
                          <td>
                           Bango Dua
                          </td>
                          <td>
                            1489
                          </td>
                          <td>
                            2231
                          </td>
                          <td>
                            636
                          </td>
                          <td><span class="text-danger">Reject</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <!-- <a href="/detailperKapita" class="badge badge-info">detail</a> -->
                          </td>
                          </tr>
                          <tr>
                          <td class="py-1">
                            4.
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Juni
                          </td>
                          <td>
                            Jawa Timur
                          </td>
                          <td>
                            Surabaya
                          </td>
                          <td>
                            Pare Pare
                          </td>
                          <td>
                            Bango Dua
                          </td>
                          <td>
                            3159
                          </td>
                          <td>
                            2231
                          </td>
                          <td>
                            636
                          </td>
                          <td><span class="text-success">Draft</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="/perKapita" class="badge badge-info">detail</a>
                            <a href="/editKapita" class="badge badge-warning">Edit</a>
                            <a href="/approvalKapita" class="badge badge-primary">Approval</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                          </td>
                          </tr>
                          <tr>
                          <td class="py-1">
                            5.
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Juli
                          </td>
                          <td>
                            Jawa Barat
                          </td>
                          <td>
                            Subang
                          </td>
                          <td>
                            Pare Pare
                          </td>
                          <td>
                            Bango Dua
                          </td>
                          <td>
                            1690
                          </td>
                          <td>
                            2231
                          </td>
                          <td>
                            636
                          </td>
                          <td><span class="text-success">Reject</span></td>
                          <td>
                            <!-- <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
                            <a href="/perKapita" class="badge badge-info">detail</a>
                            <a href="/editKapita" class="badge badge-warning">Edit</a>
                            <a href="/approvalKapita" class="badge badge-primary">Approval</a>
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
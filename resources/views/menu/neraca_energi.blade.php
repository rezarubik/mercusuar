@extends('template.admin')

@section('title', 'pembangkit')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Neraca Energi</h4>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahForm">+Tambah</button>
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
                            Tahun
                          </th>
                          <th>
                            Bulan
                          </th>
                          <th>
                            Beli
                          </th>
                          <th>
                            Sewa
                          </th>
                          <th>
                            Terima
                          </th>
                          <th>
                            Produksi sendiri
                          </th>
                          <th>
                            PMK Sendiri Sentral
                          </th>
                          <th>
                            Netto
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
                            Unit Kerja A
                          </td>
                          <td>
                            2019
                          </td>
                          <td>
                            Januari
                          </td>
                          <td>
                            56431
                          </td>
                          <td>
                            2343
                          </td>
                          <td>
                            5234
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

      <form class="forms-sample">
        <div class="form-group">
                    <label for="exampleFormControlSelect2">Unit Kerja</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option value="uk1">Unit kerja 1</option>
                      <option value="uk2">Unit kerja 2</option>
                    </select>
                  </div>
        <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
        </div>
        <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
            <span class="input-group-append">
                <button class="file-upload-browse btn btn-info" type="button">Upload</button>
            </span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">City</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
        </div>
        <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
        </form>
@endsection
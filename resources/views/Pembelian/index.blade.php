@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5><i class="fa-brands fa-cotton-bureau"></i>  Data Penjualan </h5>

            <button class="btn btn success bt-sm float-end" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
        <th>No.</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Barang</th>
    </tr>
  </thead>

  <tbody>
    <tr>
        <td>1</td>
        <td>09/08/2022</td>
        <td>5</td>
        <td>50.000</td>
        <td>Kursi</td>
        <td>
            <a href="#" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm"> <i class="fa-solid fa-ban"></i></a>
        </td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KONZ STORE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
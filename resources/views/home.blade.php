@extends('layout.app')

@section('title')
        Home
@endsection

@section('content')
<div class="container overflow-hidden text-center">
  <div class="row gy-3">
    <div class="col-6 text-light ">
      <div class="p-3 border bg-primary rounded mt-4"> 10 Barang <i class="fa-solid fa-box"></i></div>
    </div>
    <div class="col-6 text-light ">
      <div class="p-3 border bg-success rounded mt-4"> 15 Kategori <i class="fa-solid fa-tag"></i></div>
    </div>
    <div class="col-6 text-light ">
      <div class="p-3 border bg-warning rounded "> 5 Suplier <i class="fa-solid fa-truck"></i></div>
    </div>
    <div class="col-6 text-light ">
      <div class="p-3 border bg-danger rounded"> 100 Member <i class="fa-solid fa-user   "></i></div>
    </div>
  </div>
</div>
@endsection
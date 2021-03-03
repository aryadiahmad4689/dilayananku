@extends('layout.main')

@section('content')
<section>
    <div class="d-flex aktivitas">
    <a href="" class="btn actived"> <span>Verifikasi</span> </a>
    <a href="" class="btn "><span> Rekaman</span> </a>
    <a href="" class="btn "><span> Proses</span> </a>
    <a href="" class="btn "><span> Pengantaran</span> </a>
    <a href="" class="btn" ><span> Rekaman</span> </a>
    </div>
</section>

<section class="d-flex py-2">
<div class="container">
<table class="table table-hover">
  <thead class="color-dilayananku">
    <tr class="text-white">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Layanan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Syamsul</td>
      <td>E-KTP</td>
      <td>20/02/2020</td>
      <td> <a href=""><img src="images/btn.edit.svg" alt=""></a>
      </td>

    </tr>
  </tbody>
  </div>
</section>

@endsection

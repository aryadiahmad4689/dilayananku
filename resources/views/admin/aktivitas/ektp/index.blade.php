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
  @php
    $no =1;
  @endphp
  @foreach($ektps as $item)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$item->user[0]->name}}</td>
      <td>{{Ektp}}</td>
      <td>{{$item->created_at}}</td>
      <td> <a href="" data-toggle="modal" data-target="#verifikasiModal" data-id="{{$item->id}}"><img src="images/btn.edit.svg" alt=""></a></td>
    </tr>
 @endforeach
  </tbody>
  </div>
  <!-- modal -->
  <div class="modal fade" id="verifikasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-dilayananku">
        <h5 class="modal-title text-white" id="exampleModalLabel">Verifikasi Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly  class="form-control" id="staticEmail" value="Syamsul">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Layanan</label>
    <div class="col-sm-10">
      <input  readonly class="form-control" id="inputPassword" value="E-KTP">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input  readonly class="form-control" value="22/02/2020">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Berkas</label>

  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" >Verifikasi</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#chatModal">Tidak Lengkap</button>
      </div>
    </div>
  </div>
</div>

<!-- modal chat -->
<div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-dilayananku">
        <h5 class="modal-title text-white" id="exampleModalLabel">Data Tidak Lengkap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
        <textarea class="form-control" name="message" size="14"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>

<!-- modal rekaman -->
<div class="modal fade" id="rekamanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-dilayananku">
        <h5 class="modal-title text-white" id="exampleModalLabel">Verifikasi Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="form-group row">
    <input type="text" hidden id="rekamanId">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" readonly  class="form-control" id="staticEmail" value="Syamsul">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Layanan</label>
    <div class="col-sm-10">
      <input  readonly class="form-control" id="inputPassword" value="E-KTP">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input  readonly class="form-control" value="22/02/2020">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Komentar</label>
    <textarea class="form-control" size="14"></textarea>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" >Kirim</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Batal</button>
      </div>
    </div>
  </div>
</div>

  <!-- end modal -->
</section>

@endsection


@section('script2')

<script type="text/javascript">
    $(document).ready(function(){
        $('#rekamanmodal').on('show.bs.modal', function (e) {
            var getId = $(e.relatedTarget).data('id');
            document.getElementById('rekamanId').val = getId;


         });
    });
  </script>


@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mx-auto" style="width:400px;">
     <div class="d-flex py-3 z-index relative">
         <img src="{{asset('images/dilayananku.png')}}" class="mt-5" alt="dilayananku" width="40" height="40">
        <h1 class="text-white fw-bold pt-5 pl-3">Dilayananku</h1>
    </div>
        <div class="login rounded">
        <div class="box">
        <div class="d-flex">
        <h4 class="text-white py-4 mx-auto text-bold">Selamat Datang Di Layanan Kami</h4>
        </div>
        <div class="d-flex">
        <h5 class="text-white pl-5 fw-bold">Masuk untuk melanjutkan</h5>
        </div>
        <div class="col col-10 mx-auto">
        <div>
            <form action="{{route('login')}}" method="post">
                @csrf
            <label for="exampleInputEmail1" class="form-label text-white">Email</label>
            <input type="email" name="email" class="pb-2" id="exampleInputEmail1"   placeholder="input email"> <span class="icon-login"><img src="images/Login 1.svg" alt="My SVG Icon"></span>

            <label for="password" class="form-label pt-4 text-white">Password</label>
            <input type="password" name="password" id="password"  placeholder="password"><span class="icon-login"><img src="images/Password 1.svg" alt="My SVG Icon"></span>

            <button class="button text-white mt-2 px-4 text-center">Login</button>
            </form>
        </div>
        </div>
        <div class="d-flex">
        <h6 class="text-white py-4 mx-auto text-bold">Tidak Punya Akun? Silahkan <span style="color:#99C7FF;">Daftar</span></h6>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection

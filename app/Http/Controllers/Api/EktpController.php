<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ektp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EktpController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->all();

        $rules =[
            'image_kartu_keluarga' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image_ijazah' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image_foto' => "required|image|mimes:jpeg,png,jpg|max:2048"
        ];

        $validate = Validator::make($data,$rules);

        if($validate->fails()){
            return response()->json([
                "status" => "error",
                "message" => $validate->errors(),
            ],403);
        }

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'images/ektp';

         // menyimpan data file yang diupload ke variabel $file
         $imageKeluarga = $request->file('image_kartu_keluarga');
         $imageKartuKeluarga = time()."_".$imageKeluarga->getClientOriginalName();

         $ijazahImage = $request->file('image_ijazah');
         $imageIjazah = time()."_".$ijazahImage->getClientOriginalName();

         $imageFotos = $request->file('image_foto');
         $imageFoto = time()."_".$imageFotos->getClientOriginalName();

         $data['image_kartu_keluarga'] = $imageKartuKeluarga;
         $data['image_ijazah'] = $imageIjazah;
         $data['image_foto'] = $imageFoto;
         $data['user_id'] = Auth::user()->id;

         $ektp = Ektp::create($data);

         $imageFotos->move($tujuan_upload,$imageFoto);
         $ijazahImage->move($tujuan_upload,$imageIjazah);
         $imageKeluarga->move($tujuan_upload,$imageKartuKeluarga);

         return response()->json([
             'status' => "success",
             "message" => "Ektp Success Created",
             "data" => $ektp
         ],200);

    }

}

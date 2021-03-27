<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ektp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EktpController extends Controller
{
    //
    public function store(Request $request)
    {
        $ektps = $request->all();

        $rules =[
            'image_keluarga' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image_ijazah' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image_foto' => "required|image|mimes:jpeg,png,jpg|max:2048"
        ];

        $validate = Validator::make($ektps,$rules);

        if($validate->fails()){
            return response()->json([
                "status" => "error",
                "message" => $validate->errors(),
            ]);
        }

         // menyimpan data file yang diupload ke variabel $file
         $file = $request->file('image_keluarga');

         $imageKartuKeluarga = time()."_".$file->getClientOriginalName();

         // isi dengan nama folder tempat kemana file diupload
         $tujuan_upload = 'images/retribusi';
         $file->move($tujuan_upload,$imageKartuKeluarga);

         $file = $request->file('image_ijazah');

         $imageIjazah = time()."_".$file->getClientOriginalName();

         // isi dengan nama folder tempat kemana file diupload
         $tujuan_upload = 'images/retribusi';
         $file->move($tujuan_upload,$imageIjazah);

         $file = $request->file('image_foto');

         $imageFoto = time()."_".$file->getClientOriginalName();

         // isi dengan nama folder tempat kemana file diupload
         $tujuan_upload = 'images/retribusi';
         $file->move($tujuan_upload,$imageFoto);

         $data['image_keluarga'] = $imageKartuKeluarga;
         $data['image_ijazah'] = $imageIjazah;
         $data['image_foto'] = $imageFoto;

         $ektp = Ektp::create($data);

         return response()->json([
             'status' => "success",
             "message" => "Ektp Success Created",
             "data" => $ektp
         ]);

    }

}

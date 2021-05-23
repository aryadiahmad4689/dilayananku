<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ektp extends Model
{
    use HasFactory;

    protected $fillable =['user_id','image_kartu_keluarga','image_ijazah','image_foto'];
}

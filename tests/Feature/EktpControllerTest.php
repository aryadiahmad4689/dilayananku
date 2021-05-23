<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class EktpControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testStoreNotRequired()
    {
        $data= [
            'image_ijazah' => ""
        ];

        $this->post(route('ektps.store'),$data)->assertStatus(403);
    }

    public function testStoreSuccess()
    {
        $user = User::find(1); // find specific user
        $data= [
            'image_ijazah' => UploadedFile::fake()->create('file.jpg'),
            'image_kartu_keluarga' => UploadedFile::fake()->create('hhhh.jpg'),
            'image_foto' => UploadedFile::fake()->create('lll.jpg'),
        ];

        $this->be($user);
        $this->post(route('ektps.store'),$data)->assertStatus(200);
    }
}

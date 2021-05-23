<?php

namespace Tests\Feature;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function testLoginSuccess()
    {
        $data = [
            "email" => "ariadiahmad@dilayananku.com",
            "password" => "secret",
        ];

        $this->post(route('api.login'),$data)->assertStatus(200)->assertOk();

    }

    public function testLoginNotSuccess()
    {
        $data = [
            "email" => "ariadiahmadd@dilayananku.com",
            "password" => "secret",
        ];

        $this->post(route('api.login'),$data)->assertStatus(400);
    }

    public function testEmailRequired()
    {
        $data = [
            "password" => "secret",
        ];

        $this->post(route('api.login'),$data)->assertSeeText("error")->assertStatus(400);
    }

    public function testPasswordRequired()
    {
        $data = [
            "email" => "ariadiahmad@dilayananku.com",
            "password" => ""
        ];

        $this->post(route('api.login'),$data)->assertStatus(400)->assertSeeText("error");
    }

}

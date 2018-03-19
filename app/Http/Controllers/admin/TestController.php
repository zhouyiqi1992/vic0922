<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class TestController extends Controller
{
    public function testJwt(Request $request)
    {
        $token = JWTAuth::attempt();
    }
}
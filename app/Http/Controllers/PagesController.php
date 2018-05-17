<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function root()
    {
        return view('pages.root');
    }

    /**
     * @SWG\Get(
     *     path = "/testSwg/{user_id}",
     *     description = "这里是文档描述",
     *     summary = "这里是接口简介",
     *     tags = "这是接口标签，可以有多个",
     *     operationId = "getMyData",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *     name="user_id",
     *     in = "query",
     *     type = "integer",
     *     required="true",
     *     description="用户id",
     *     )
     * )
     *
     * @SWG\Response(
     *     response = 200,
     *     description = "响应结果的描述"
     * )
     *
     */
    public function testSwg()
    {

    }
}

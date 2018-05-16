<?php

namespace App\Http\Controllers;

use Swagger\Annotations\Info;
use Swagger\Annotations as SWG;

class SwaggerController extends Controller
{
    /**
     * @Swagger(
     *     schemes={"http"},
     *     basePath="/",
     *     consumes={"application/json"},
     *     tags={
     *         @SWG\Tag(
     *             name="API",
     *             description="API接口"
     *         )
     *     }
     * )
     *
     * @Info(
     *  title="API文档",
     *  version="0.1"
     * )
     *
     * @return mixed
     */

    public function doc()
    {
        $swagger = \Swagger\scan(realpath(__DIR__.'/../../'));
        return response()->json($swagger);
    }
}

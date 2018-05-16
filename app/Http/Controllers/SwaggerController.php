<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Swagger\Annotations as SWG;
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


class SwaggerController extends Controller
{
    public function doc()
    {
        $swagger = \Swagger\scan(realpath(__DIR__ . '/../../'));
        return response()->json($swagger);
    }
}

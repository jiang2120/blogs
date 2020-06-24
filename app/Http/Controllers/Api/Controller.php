<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Controller extends BaseController
{
    /**
     * ---------------------------------------------------------------
     * 返回错误信息
     * ---------------------------------------------------------------
     * @return array
     */
    public function errorResponse($statusCode, $message=null, $code=0)
    {
        throw new HttpException($statusCode, $message, null, [], $code);
    }
}
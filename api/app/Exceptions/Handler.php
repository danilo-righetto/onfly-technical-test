<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception){
        // TODO
        return response()->json( [
            'version' => env('APP_VERSION', '1.0.0'),
            'success' => false,
            'message' => '',
            'status' => '404'
        ], 404 );
    }
}

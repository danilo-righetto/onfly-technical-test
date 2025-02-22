<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e) {
            if ($e instanceof MethodNotAllowedHttpException) {
                return response()->json( [
                    'version' => env('APP_VERSION', '1.0.0'),
                    'success' => false,
                    'message' => 'Este método não é permitido para a rota solicitada',
                    'status' => '405'
                ], 405 );
            }

            if ($e instanceof NotFoundHttpException) {
                return response()->json( [
                    'version' => env('APP_VERSION', '1.0.0'),
                    'success' => false,
                    'message' => 'Esta rota não foi encontrada.',
                    'status' => '404'
                ], 404 );
            }

            if ($e instanceof \BadMethodCallException) {
                return response()->json( [
                    'version' => env('APP_VERSION', '1.0.0'),
                    'success' => false,
                    'message' => $e->getMessage(),
                    'status' => '404'
                ], 404 );
            }

            return response()->json( [
                'version' => env('APP_VERSION', '1.0.0'),
                'success' => false,
                'message' => $e->getMessage(),
                'status' => '404'
            ], 404 );
        });
    })->create();

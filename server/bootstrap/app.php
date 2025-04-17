<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Auth\AuthenticationException;
use App\Http\Middleware\ForceAcceptJsonHeader;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append([
            ForceAcceptJsonHeader::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions
            ->render(function (AuthenticationException $e, Request $request) {
                return response()->json([
                    'message' => __('auth.unauthenticated'),
                    'status' => Response::HTTP_UNAUTHORIZED,
                ], Response::HTTP_UNAUTHORIZED);
            })
            ->render(function (NotFoundHttpException $e, Request $request) {
                $strs = explode(' ', $e->getMessage());

                return response()->json([
                    'message' => __('response.error.show', ['resource' => end($strs)]),
                    'status' => Response::HTTP_NOT_FOUND,
                ], Response::HTTP_NOT_FOUND);
            });
    })->create();

<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Auth\AuthenticationException;
use App\Http\Middleware\ForceAcceptJsonHeader;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ThrottleUnauthorizedRequest;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Database\Eloquent\RelationNotFoundException;
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
                $request = new ThrottleUnauthorizedRequest;
                $request->increment();

                return response()->json([
                    'message' => __('auth.tokens.invalid'),
                    'status' => Response::HTTP_UNAUTHORIZED,
                ], Response::HTTP_UNAUTHORIZED, [
                    'X-RateLimit-Limit' => $request::MAX_ATTEMPTS,
                    'X-RateLimit-Remaining' => $request->getRemainingAttempts(),
                ]);
            })
            ->render(function (NotFoundHttpException $e, Request $request) {
                $strs = explode(' ', $e->getMessage());
                return response()->json([
                    'message' => __('response.error.show', ['resource' => end($strs)]),
                    'status' => $e->getStatusCode(),
                ], $e->getStatusCode());
            })
            ->render(function (ThrottleRequestsException $e, Request $request) {
                return response()->json([
                    'message' => $e->getMessage(),
                    'status' => $e->getStatusCode(),
                ],
                    $e->getStatusCode(),
                    $e->getHeaders()
                );
            })
            ->render(function (RelationNotFoundException $e, Request $request) {
                $relation = Str::of($e->getMessage())->betweenFirst('[', ']');
                return response()->json([
                    'message' => __('response.req_query.relation.error', ['relation' => $relation]),
                    'status' => Response::HTTP_BAD_REQUEST,
                ], Response::HTTP_BAD_REQUEST);
            });
    })->create();

<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    
    public function render($request, Throwable $exception)
{
    if ($exception instanceof HttpExceptionInterface) {
        return response()->view('errors.any', ['exception' => $exception], $exception->getStatusCode());
    }

      // Fallback for all other errors
    return response()->view('errors.any', ['exception' => new \Symfony\Component\HttpKernel\Exception\HttpException(500, $exception->getMessage())], 500);

    return parent::render($request, $exception);
}




protected function unauthenticated($request, AuthenticationException $exception)
{
    if ($request->expectsJson()) {
        return response()->json(['message' => $exception->getMessage()], 401);
    }

    if ($request->is('admin') || $request->is('admin/*')) {
        return redirect()->guest(route('admin.login'))->with('error', 'Your session expired. Please log in again.');
    }

    return redirect()->guest(route('login'));
}

}

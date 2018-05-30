<?php

namespace App\Http\Middleware;

use App\Article;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if ($request->user()->role_id != 1)
        {
            ##return new \Response(view('unauthorized')->with('role', 'Admin'));
            ##return \Response::view('unauthorized')->header('role', 'Admin');
            return \Response::view('unauthorized', ['role' => 'Admin']);
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Article;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserMiddleware
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
        if ($request->user()->role_id != 2)
        {
            ##return new \Response(view('unauthorized')->with('role', 'User'));
            ##return \Response::view('unauthorized')->header('role', 'User');
            return \Response::view('unauthorized', ['role' => 'User']);
        }
        return $next($request);
    }
}

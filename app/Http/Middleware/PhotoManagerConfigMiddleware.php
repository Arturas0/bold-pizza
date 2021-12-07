<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\PhotoManageService;

class PhotoManagerConfigMiddleware
{

    private $photoManager;

    public function __construct(PhotoManageService $photoManager)
    {
        $this->photoManager = $photoManager;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $config)
    {
        $this->photoManager->config($config);

        return $next($request);
    }
}

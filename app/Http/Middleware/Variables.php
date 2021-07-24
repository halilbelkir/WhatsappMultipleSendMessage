<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Products;
use Illuminate\Support\Facades\View;

class Variables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $settings  = Settings::find(1);

        View::share([
            'settings' => $settings,
        ]);
        return $next($request);
    }
}

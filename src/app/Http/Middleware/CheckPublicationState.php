<?php

namespace App\Http\Middleware;

use App\Models\Practice;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;

class CheckPublicationState
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
        $practice = Practice::findOrFail($request->practice);

        if (Gate::forUser($request->user())->allows('moderate') || $practice->isPublished()) {
            return $next($request);
        }

        return redirect(URL::previous());
    }
}

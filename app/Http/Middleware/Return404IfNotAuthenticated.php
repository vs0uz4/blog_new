<?php

namespace App\Http\Middleware;

use Closure, Auth;

class Return404IfNotAuthenticated
{
	/**
	 * Hide all routes if use not authenticated (return 404).
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure                 $next
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (!Auth::check()) {
			abort('404');
		}

		return $next($request);
	}
}

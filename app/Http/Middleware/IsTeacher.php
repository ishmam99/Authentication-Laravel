<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class IsTeacher
{ 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::get('userrole')!='teacher'){
            return redirect()->to('dashboard');
        }
       
        return $next($request);
    }
}

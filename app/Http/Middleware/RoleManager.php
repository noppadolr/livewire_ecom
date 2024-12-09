<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        // ตรวจสอบว่าได้ login แล้วหรือไม่ ถ้าไม่ refirect ไปหน้า login
        if (!Auth::check())
        {
            return redirect()->route('login');
        }
        $authUserRole = Auth::user()->role;
        switch ($role)
        {
            case 'admin':
                if ($authUserRole == 2)
                {
                    return $next($request);
                }
                break;
            case 'vendor':
                if ($authUserRole == 1)
                {
                    return $next($request);
                }
                break;
            case 'user':
                if ($authUserRole == 0)
                {
                    return $next($request);
                }
                break;
        }
        switch ($authUserRole)
        {
            case 0:
                return redirect()->route('dashboard');
            case 1:
                return redirect()->route('vendor.dashboard');
            case 2:
                return redirect()->route('admin.dashboard');
        }
        return redirect()->route('login');

    }
}

<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Kiểm tra URL, không redirect nếu đang ở trang /register hoặc /login
                if ($request->is('register', 'login', 'forgot-password', 'reset-password/*')) {
                    return $next($request); // Cho phép vào trang đăng ký và đăng nhập
                }

                // Redirect đến trang dashboard nếu đã đăng nhập
                return redirect(RouteServiceProvider::HOME); // Tùy chỉnh HOME thành /home nếu cần
            }
        }

        return $next($request); // Tiếp tục nếu chưa đăng nhập
    }
}

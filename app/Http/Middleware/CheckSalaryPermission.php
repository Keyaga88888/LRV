<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSalaryPermission
{
    public function handle(Request $request, Closure $next): Response
    {
        // dd(
        //     Auth::check(),
        //     Auth::user(),
        //     Auth::user()?->type_account_id
        // );

        if (! Auth::check()) {
            abort(403);
        }

        // if (!in_array(Auth::user()->type_account_id, [3, 4, 5])) {
        //     abort(403);
        // } bỏ phân quyền bình thường   |  vào Modules/Salary/routes/web.php chỉnh

        return $next($request);

    }
}

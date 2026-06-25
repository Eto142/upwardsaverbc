<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KycApproved
{
    /**
     * Block access to protected routes until admin has approved the user's KYC.
     * kyc_status: 0 = pending, 1 = approved, 2 = rejected
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->kyc_status != '1') {
            // Allow KYC-related pages and logout through
            if ($request->routeIs('kyc.pending', 'kyc.upload.*', 'sign.out', 'logOut', 'user.logout')) {
                return $next($request);
            }
            return redirect()->route('kyc.pending');
        }

        return $next($request);
    }
}

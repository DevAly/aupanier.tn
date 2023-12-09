<?php

namespace App\Http\Middleware\Tenant;

use App\Helpers\ResponseMessage;
use App\Mail\BasicMail;
use App\Models\PaymentLogs;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebsiteCreationInProgressMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (tenant()) {

            if (!tenant()->is_fully_created) {
                return redirect()->route('tenant.frontend.package.creationInProgress', ['aupanier_login_token' => $request->get('aupanier_login_token')]);
            }

            return $next($request);
        }
    }
}

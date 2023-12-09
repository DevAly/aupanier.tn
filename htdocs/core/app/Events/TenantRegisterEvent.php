<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;

class TenantRegisterEvent implements ShouldQueue
{
    use Dispatchable,Queueable;
    public $user_info;
    public $subdomain;
    public $theme;
    public function __construct(User $user, $subdomain, $theme = 'hexfashion')
    {
        $this->user_info = $user;
        $this->subdomain = $subdomain;
        $this->theme = $theme;

        \Session::put('theme', $theme);
    }
}

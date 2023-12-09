<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Stancl\Tenancy\Contracts\TenantWithDatabase;


class StartTenantDatabaseCreationListener implements ShouldQueue
{

    private TenantWithDatabase $tenant;

    public function __construct(TenantWithDatabase $tenant)
    {
        $this->tenant = $tenant;
    }


    public function handle()
    {
        // Log::channel('slack-new-shops')->info("Shop: {$this->tenant->id} Starting database creation");

    }
}

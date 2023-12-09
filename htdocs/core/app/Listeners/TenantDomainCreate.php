<?php

namespace App\Listeners;

use App\Events\TenantRegisterEvent;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Helpers\Payment\DatabaseUpdateAndMailSend\LandlordPricePlanAndTenantCreate;
use Illuminate\Support\Facades\Log;


class TenantDomainCreate
{

    public function __construct()
    {
        //
    }

    public function handle(TenantRegisterEvent $event)
    {
        try{
            // Log::channel('slack-new-shops')->info("Shop: {$event->subdomain} now is being created ");

            $tenant = Tenant::create(['id' => $event->subdomain]);
            DB::table('tenants')->where('id',$tenant->id)->update(['user_id' => optional($event->user_info)->id, 'theme_slug' => $event->theme]);
            $tenant->domains()->create(['domain' => $event->subdomain.'.'.env('CENTRAL_DOMAIN')]);

        }catch(\Exception $ex){
            $message = $ex->getMessage();
            if(str_contains($message,'Access denied')){
                abort(462,__('Database created failed, Make sure your database user has permission to create database'));
            }
            Log::channel('slack-new-shops')->info("Shop: {$event->subdomain} error: {$message} ");

        }
    }
}

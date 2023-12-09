<?php

use App\Actions\Payment\PaymentGateways;
use App\Events\TenantRegisterEvent;
use App\Listeners\TenantDataSeedListener;
use App\Models\PaymentLogs;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Log;



/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('test-slack', function () {
    Log::channel('slack-new-shops')->info('New shop');
    //$this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('debug-tenant-creation', function () {
    try{
        $redis=Redis::connect('cache',6379);
        dd($redis);
        return response('redis working');
    }catch(\Predis\Connection\ConnectionException $e){
        return response('error connection redis');
    }
    die;

    $payment_logs = PaymentLogs::find(43);
    $user = User::where('id', $payment_logs->user_id)->first();
    (new TenantDataSeedListener())->handle(new TenantRegisterEvent($user, $payment_logs->tenant_id));


})->purpose('Display an inspiring quote');

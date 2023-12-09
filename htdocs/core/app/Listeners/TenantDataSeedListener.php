<?php

namespace App\Listeners;

use App\Events\TenantRegisterEvent;
use App\Models\Tenant;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Helpers\Payment\DatabaseUpdateAndMailSend\LandlordPricePlanAndTenantCreate;
use Junges\TrackableJobs\Concerns\Trackable;
use Stancl\Tenancy\Contracts\TenantWithDatabase;


class TenantDataSeedListener implements ShouldQueue
{
    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public ?string $connection = 'redis';

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public ?string $queue = 'listeners';

    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public int $delay = 60;
    private TenantWithDatabase $tenant;

    public function __construct(TenantWithDatabase $tenant)
    {
        $this->tenant = $tenant;
    }


    public function handle()
//    public function handle(TenantRegisterEvent $event)
    {
        // Log::info('before tanant update amine1'. json_encode($this->tenant->getAttributes()));
        try{
        session()->put('theme', $this->tenant->theme_slug);
        $phpPath = exec('which php');
//        die('handle it');
        try {
            Log::channel('slack-new-shops')->info("Shop: {$this->tenant->id} running migrations");
            //database migrate
            $command = 'tenants:migrate --force --tenants=' . $this->tenant->id;
            $cmd = $phpPath.' '.base_path().'/artisan '.$command;
            echo $cmd;
            exec($cmd);
            //Artisan::call($command);

        } catch (\Exception $e) {
            $message = $e->getMessage();

            if (str_contains($message, 'Duplicate entry')) {
                abort(460, __('Tenant database demo data already imported'));
            }

            if (str_contains($message, 'does not exist')) {
                abort(461, __('Tenant does not exists'));
            }
        }
        // Log::channel('slack-new-shops')->info("Shop: {$this->tenant->id} running seeders");
        $command = 'tenants:seed --force --tenants=' . $this->tenant->id;
        $cmd = $phpPath.' '.base_path().'/artisan '.$command;
        echo $cmd;
        exec($cmd);
        // Log::info('before tanant update amine');
        // Log::info('THEME: '.$this->tenant->theme_slug);
        \DB::table('tenants')->where('id', $this->tenant->id)->update(['is_fully_created' => 1]);
        // Log::info('after tanant update amine: '.$this->tenant->id);
        Log::channel('slack-new-shops')->info("Shop: {$this->tenant->id} done creating");
        }catch (\Throwable $throwable){
            // Log::info('after tanant update amine error:'.$throwable->getMessage());
            Log::channel('slack-new-shops')->info("Shop: {$this->tenant->id} error in creation: {$throwable->getMessage()}");
        }
        //Artisan::call($command);
    }
}

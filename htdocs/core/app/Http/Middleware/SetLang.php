<?php

namespace App\Http\Middleware;

use App\Language;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class SetLang
{
    public function handle($request, Closure $next)
    {
        try{
        $defaultLang =  \Cache::remember('lang_key', 60 * 60, function () {
            try {
                $model =  \App\Models\Language::where('default',1)->first();
                if(!$model){
                    $model = new \App\Models\Language();
                    $model->slug = 'fr_FR';
                }
                return $model;
            } catch (\Exception $exception) {
                $model = new \App\Models\Language();
                $model->slug = 'fr_FR';
                return $model;
            }
        });


        if (session()->has('lang')) {
            $current_lang = \App\Models\Language::where('slug',session()->get('lang'))->first();
            if (!empty($current_lang)){
                Carbon::setLocale($current_lang->slug);
                app()->setLocale($current_lang->slug);
            }else {
                session()->forget('lang');
            }
        }else{
            app()->setLocale($defaultLang->slug);
            Carbon::setLocale($defaultLang->slug);
        }

        if(!is_null(tenant())){
            Config::set('mail.from.address', env('TENANT_MAIL_FROM_ADDRESS'));
            $defaultConfig = Config('mail');
            $defaultConfig['from']['address'] = 'contact@em1693.shops.aupanier.tn';
            $defaultConfig['default'] = 'smtp_tenant';
            Config::set('mail',$defaultConfig);
        }

        }catch (\Throwable $throwable){
            Log::critical($throwable);
        }
        return $next($request);
    }
}

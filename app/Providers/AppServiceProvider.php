<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $client = new \GuzzleHttp\Client();
        $status = $client->request('GET', 'https://api.mcsrvstat.us/2/spookly.de', []);
        View::share('status', json_decode($status->getBody()));
    }
}

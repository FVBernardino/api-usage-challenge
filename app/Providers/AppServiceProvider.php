<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Crew\Unsplash\HttpClient::init([
            'applicationId'	=> '10f98567145a460296d16767f84f26c6d6e43a215474e21aa7a91066da8aa5fc',
            'secret'		=> '32700a904c7ffab8b022caae9c8e71ad77bc194b8d1a9a355a834b8fd6225d35',
//            'callbackUrl'	=> 'https://your-application.com/oauth/callback',
            'utmSource' => 'CasafyApiPhotos'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

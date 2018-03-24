<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Kraken\KrakenAPI;

class KrakenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() 
	{
		$this->publishes([
			'config/kraken.php' => config_path('kraken.php')
		]);
	} // boot

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->bind('kraken', function() {
			return new KrakenAPI(config('kraken'));
		});
    }
}

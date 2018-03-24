<?php 

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class KrakenAPIFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'kraken';
	}
}
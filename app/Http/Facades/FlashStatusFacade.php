<?php
/**
 * Created for concerts.
 * User: Sergio Martin Marquina
 * Email: smarquina@zenos.es
 * Date: 09/09/2020
 * Time: 17:58
 */

namespace App\Http\Facades;


use Illuminate\Support\Facades\Facade;

class FlashStatusFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'flashStatus';
    }
}

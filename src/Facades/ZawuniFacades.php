<?php

namespace PhpJunior\Zawuni\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: nyinyilwin
 * Date: 6/20/17
 * Time: 12:37 AM
 */
class ZawuniFacades extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zawuni';
    }
}
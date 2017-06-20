<?php
/**
 * Created by PhpStorm.
 * User: nyinyilwin
 * Date: 6/20/17
 * Time: 9:05 AM
 */

if (! function_exists('zawuni')) {

    function zawuni($text = null)
    {
        return app('zawuni')->text($text);
    }
}
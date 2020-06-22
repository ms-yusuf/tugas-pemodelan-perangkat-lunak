<?php

/**
 * Created by PhpStorm.
 * User: M.S. Yusuf
 * Date: 22/04/2020
 * Time: 14:23
 */

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class General extends Facade{
  protected static function getFacadeAccessor() { return 'general'; }
}
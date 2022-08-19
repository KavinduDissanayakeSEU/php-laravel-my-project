<?php
namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;
use infrastructure\Images;

class ImagesFacade extends Facade
{
    // @return string
    protected static function getFacadeAccessor(){
        return Images::class;
    }
}

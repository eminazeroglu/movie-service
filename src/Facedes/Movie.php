<?php

namespace Azeroglu\Movie\Facades;

use Illuminate\Support\Facades\Facade;

class Movie extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'movie';
    }
}

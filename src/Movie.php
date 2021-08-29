<?php

namespace Azeroglu\Movie;

use Azeroglu\Bot\Bot;

class Movie extends Bot
{
    /*
     * Video Az
     * */
    public function videoAz($limit = 1)
    {
        $links = $this
            ->request('https://maraqli.tv/')
            ->links('.g1-collection-items .g1-collection-item article .g1-frame')
            ->limit($limit)
            ->get();

        return $links;
    }
}

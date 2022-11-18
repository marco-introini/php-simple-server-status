<?php

namespace MintDev\SimpleServerStatus;

class Helpers
{

    public static function getSymbolByQuantity(float $bytes): string
    {
        $symbols = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
        $exp = $bytes ? floor(log($bytes) / log(1024)) : 0;

        return sprintf('%.2f '.$symbols[$exp], ($bytes / pow(1024, floor($exp))));
    }

}
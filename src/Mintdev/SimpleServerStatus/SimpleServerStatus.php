<?php

namespace MintDev\SimpleServerStatus;

use MintDev\SimpleServerStatus\Types\DiskStats;

class SimpleServerStatus
{


    public function __construct()
    {
    }


    public function getDiskStats(): DiskStats
    {
        $df = disk_free_space("/");
        $ds = disk_total_space("/");

        $percUtil = floor($df*100/$ds);

        return new DiskStats($df,$ds,$percUtil);
    }
}
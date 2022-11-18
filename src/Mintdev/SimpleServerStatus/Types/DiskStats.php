<?php

namespace MintDev\SimpleServerStatus\Types;

class DiskStats
{
    public readonly float $free;
    public readonly float $total;
    public readonly int $percFree;

    public function __construct(float $free, float $total, int $percFree)
    {
        $this->free = $free;
        $this->total = $total;
        $this->percFree = $percFree;
    }


}
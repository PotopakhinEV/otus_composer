<?php
declare(strict_types=1);

namespace EgorPotopakhin\OtusComposer;

class StringReverser
{
    public  function getReversedString(string $s): string {
        return strrev($s);
    }
}
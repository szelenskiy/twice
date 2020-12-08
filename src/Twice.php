<?php

namespace Szelenskiy\Twice;

/**
 * Class Greetr
 *
 * @package Szelenskiy\Twice
 */
class Twice
{
    /**
     * @param float $number
     *
     * @return float
     */
    public function get (float $number): float
    {
        return $number * 2;
    }
}

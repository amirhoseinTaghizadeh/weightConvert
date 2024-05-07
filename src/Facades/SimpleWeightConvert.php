<?php

namespace WeightConvert\SimpleWeightConvert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WeightConvert\SimpleWeightConvert\SimpleWeightConvert
 */
class SimpleWeightConvert extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WeightConvert\SimpleWeightConvert\SimpleWeightConvert::class;
    }
}

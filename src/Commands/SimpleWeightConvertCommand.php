<?php

namespace WeightConvert\SimpleWeightConvert\Commands;

use Illuminate\Console\Command;

class SimpleWeightConvertCommand extends Command
{
    public $signature = 'simpleweightconvert';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

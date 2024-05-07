<?php

namespace WeightConvert\SimpleWeightConvert;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WeightConvert\SimpleWeightConvert\Commands\SimpleWeightConvertCommand;

class SimpleWeightConvertServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simpleweightconvert')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_simpleweightconvert_table')
            ->hasCommand(SimpleWeightConvertCommand::class);
    }
}

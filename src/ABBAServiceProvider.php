<?php

namespace Aryala7\ABBA;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aryala7\ABBA\Commands\ABBACommand;

class ABBAServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('abba')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_abba_table')
            ->hasCommand(ABBACommand::class);
    }
}

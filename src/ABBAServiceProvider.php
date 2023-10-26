<?php

namespace Aryala7\ABBA;

use Aryala7\ABBA\Commands\ABBACommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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

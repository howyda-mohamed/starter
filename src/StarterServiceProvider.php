<?php

namespace Tasawk\Starter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tasawk\Starter\Commands\StarterCommand;

class StarterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('starter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_starter_table')
            ->hasCommand(StarterCommand::class);
    }
}

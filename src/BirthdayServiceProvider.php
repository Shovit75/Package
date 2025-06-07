<?php

namespace Shovit75\Birthday;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Shovit75\Birthday\Commands\BirthdayCommand;

class BirthdayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('birthday')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_birthday_table')
            ->hasCommand(BirthdayCommand::class);
    }
}

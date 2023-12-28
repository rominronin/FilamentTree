<?php

namespace Yemenpoint\FilamentTree;

use Filament\Contracts\Plugin;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTreeServiceProvider implements Plugin
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-tree')
            ->hasAssets()
            ->hasTranslations()
            ->hasViews();
    }
}

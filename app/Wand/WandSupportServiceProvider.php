<?php

namespace App\Wand;

use Illuminate\Support\AggregateServiceProvider;
use Illuminate\Database\MigrationServiceProvider;

class WandSupportServiceProvider extends AggregateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        \App\Wand\WandServiceProvider::class,
        MigrationServiceProvider::class,
        \Illuminate\Foundation\Providers\ComposerServiceProvider::class,
    ];
}

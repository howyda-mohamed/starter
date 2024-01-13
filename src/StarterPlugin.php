<?php

namespace Tasawk\Starter;

use Filament\Contracts\Plugin;
use Tasawk\Starter\Filament\Resources\OurTeamResource;
use Filament\Panel;


class StarterPlugin implements Plugin
{
    public function getId(): string
    {
        return 'tasawk-starter';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                OurTeamResource::class,
            ])
            ->pages([]);
    }

    public function boot(Panel $panel): void
    {
    }
}

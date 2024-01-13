<?php

namespace Tasawk\Starter\Filament\Resources\OurTeamResource\Pages;

use Tasawk\Starter\Filament\Resources\OurTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurTeam extends EditRecord
{
    protected static string $resource = OurTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Pages;

use App\Settings\EntitySettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\TextInput;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = EntitySettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('phone')
                ->label('Teléfono')
                ->required(),
            ]);
    }
}

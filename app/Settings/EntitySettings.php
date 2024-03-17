<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class EntitySettings extends Settings
{

    public string $phone;

    public static function group(): string
    {
        return 'general';
    }
}

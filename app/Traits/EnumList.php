<?php

namespace App\Traits;

/**
 * @method static cases()
 */
trait EnumList
{
    public static function listNames(): array
    {
        return array_map(static fn ($enum) => $enum->name, self::cases());
    }

    public static function listValues(): array
    {
        return array_map(static fn ($enum) => $enum->value ?? $enum->name, self::cases());
    }
}

<?php

namespace App\Traits;

trait EnumList
{
    /**
     * @return array<string>
     */
    public static function listNames(): array
    {
        return array_map(static fn ($enum) => $enum->name, self::cases());
    }

    /**
     * @return array<string>
     */
    public static function listValues(): array
    {
        return array_map(static fn ($enum) => $enum->value ?? $enum->name, self::cases());
    }
}

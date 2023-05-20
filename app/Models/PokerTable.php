<?php

namespace App\Models;

use App\Enums\PokerTableStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokerTable extends Model
{
    use HasUlids;
    use HasFactory;

    protected $casts = [
        'status' => PokerTableStatusEnum::class,
        'cards'  => 'array',
    ];
}

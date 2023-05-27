<?php

namespace App\Enums;

use App\Traits\EnumList;

enum PokerTableStatusEnum: string
{
    use EnumList;

    case OPEN  = 'OPEN';
    case CLOSE = 'CLOSE';
}

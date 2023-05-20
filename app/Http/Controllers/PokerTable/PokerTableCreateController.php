<?php

namespace App\Http\Controllers\PokerTable;

use App\Http\Controllers\Controller;
use App\Models\PokerTable;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Get;

class PokerTableCreateController extends Controller
{
    #[Get(uri: 'poker-table', name: 'poker-table.create')]
    public function __invoke(Request $request)
    {
        $pokerTables = PokerTable::query()->paginate();

        return view(
            'poker-table.create',
            compact('pokerTables')
        );
    }
}

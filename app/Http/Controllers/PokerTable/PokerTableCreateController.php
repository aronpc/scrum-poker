<?php

namespace App\Http\Controllers\PokerTable;

use App\Http\Controllers\Controller;
use App\Models\PokerTable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\RouteAttributes\Attributes\{Get, Middleware};

#[Middleware('auth')]
class PokerTableCreateController extends Controller
{
    #[Get(uri: 'poker-table', name: 'poker-table.create')]
    public function __invoke(Request $request): View
    {
        $pokerTables = PokerTable::query()->paginate();

        return view(
            'poker-table.create',
            compact('pokerTables')
        );
    }
}

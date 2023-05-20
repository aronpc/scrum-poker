<?php

namespace App\Http\Controllers\PokerTable;

use App\Http\Controllers\Controller;
use App\Models\PokerTable;
use Illuminate\Contracts\View\{Factory, View};
use Illuminate\Foundation\Application;
use Spatie\RouteAttributes\Attributes\{Get, Middleware};

#[Middleware('auth')]
class PokerTableShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    #[Get('poker-table/{pokerTable}', 'poker-table.show')]
    public function __invoke(PokerTable $pokerTable): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('poker-table.show', compact('pokerTable'));
    }
}

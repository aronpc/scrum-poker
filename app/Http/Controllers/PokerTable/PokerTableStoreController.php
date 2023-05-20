<?php

namespace App\Http\Controllers\PokerTable;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePokerTableRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\RouteAttributes\Attributes\{Middleware, Post};

#[Middleware('auth')]
class PokerTableStoreController extends Controller
{
    #[Post(uri: 'poker-table', name: 'poker-table.store')]
    public function __invoke(StorePokerTableRequest $request): RedirectResponse
    {
        Auth::user()->poker_tables()->create(
            $request->validated()
        );

        return redirect()->to(route('poker-table.create'));
    }
}

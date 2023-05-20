<?php

namespace App\Http\Controllers\PokerTable;

use App\Http\Controllers\Controller;
use App\Models\PokerTable;
use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Post;

class PokerTableStoreController extends Controller
{
    #[Post(uri: 'poker-table', name: 'poker-table.store')]
    public function __invoke(Request $request)
    {
        PokerTable::query()->create($request->all());
    }
}

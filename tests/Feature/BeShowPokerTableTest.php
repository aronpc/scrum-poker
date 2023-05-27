<?php

use App\Models\{PokerTable, User};

use function Pest\Laravel\actingAs;

it('has beshowpokertable page', function () {
    $user       = User::factory()->create();
    $pokerTable = PokerTable::factory()->makeOne();
    $user->poker_tables()->create($pokerTable->toArray());
    actingAs($user);
    $response = $this->get('/poker-table/' . $pokerTable->id);

    $response->assertStatus(200);
});

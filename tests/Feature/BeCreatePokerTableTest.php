<?php

use App\Models\{PokerTable, User};

use function Pest\Laravel\actingAs;

test('be create poker table', function () {
    $pokerTable = PokerTable::factory()->count(1)->make();
    $user       = User::factory()->create();

    actingAs($user);
    $response = $this->post(
        route('poker-table.store'),
        $pokerTable->first()->toArray()
    );

    $response->assertRedirect(route('poker-table.create'));
    $this->assertDatabaseCount('poker_tables', 1);

    $this->get(
        route('poker-table.create')
    )->assertSeeText($pokerTable->first()->name);

});

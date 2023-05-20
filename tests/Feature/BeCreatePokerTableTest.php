<?php

use App\Models\PokerTable;

test('be create poker table', function () {
    //ARRANGE
    $pokerTable = PokerTable::factory()->count(1)->make();

    //ACT
    $response = $this->post(
        route('poker-table.store'),
        $pokerTable->first()->toArray()
    );

    //ASSERT
    $response->assertStatus(200);
    $this->assertDatabaseCount('poker_tables', 1);

});

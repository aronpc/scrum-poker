<?php

use App\Enums\PokerTableStatusEnum;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('poker_tables', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->json('cards');
            $table->enum('status', PokerTableStatusEnum::listNames())
                ->default(PokerTableStatusEnum::OPEN->value)
                ->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('poker_tables');
    }
};

<?php

namespace App\Events;

use App\Models\PokerTable;
use Illuminate\Broadcasting\{Channel, InteractsWithSockets, PresenceChannel};
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OnlineUserEvent implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(private PokerTable $pokerTable, private readonly mixed $message = null)
    {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('App.Models.PokerTable.' . $this->pokerTable->id),
            new PresenceChannel('App.Models.PokerTable.' . $this->pokerTable->id),
        ];
    }

    public function broadcastAs()
    {
        return 'OnlineUsersEvent';
    }
}

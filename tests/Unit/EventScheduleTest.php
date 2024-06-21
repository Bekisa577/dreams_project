<?php

namespace Tests\Unit;

use App\Services\EventScheduler;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventSchedulerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_schedule_an_event()
    {
        // Create an event instance
        $eventData = [
            'event_type' => 'Workshop',
            'learning_outcomes' => 'Skills training, HIV prevention education',
            'start_date' => now(),
            'end_date' => now()->addDays(3),
            // Add other required attributes
        ];

        $eventScheduler = new EventScheduler();
        $scheduledEvent = $eventScheduler->scheduleEvent($eventData);

        // Assert that an event was successfully scheduled
        $this->assertInstanceOf(Event::class, $scheduledEvent);
        $this->assertEquals('Workshop', $scheduledEvent->event_type);
        // Add more assertions for other attributes as needed
    }
}

<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_schedule_an_event()
    {
        // Assuming authentication setup for admin user
        $this->actingAsAdmin();

        $response = $this->post('/events', [
            'event_type' => 'Workshop',
            'learning_outcomes' => 'Skills training, HIV prevention education',
            'start_date' => now(),
            'end_date' => now()->addDays(3),
            // Add other required attributes
        ]);

        $response->assertStatus(302); // Assuming successful event creation redirects to events list
        $this->assertDatabaseHas('events', [
            'event_type' => 'Workshop',
            // Add more assertions for other attributes as needed
        ]);
    }

    protected function actingAsAdmin()
    {
        // Logic to authenticate as admin user
        // Example:
        // $admin = factory(User::class)->create(['role' => 'admin']);
        // $this->actingAs($admin);
    }
}

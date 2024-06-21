<?php

namespace Tests\Unit;

use App\Services\EnrollmentService;
use App\Models\Participant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnrollmentServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_enroll_a_participant()
    {
        // Create a participant instance
        $participantData = [
            'child_name' => 'Alice',
            'address' => '123 Main St',
            'age_group' => '10-14 yrs',
            'hiv_status' => 'Negative',
            // Add other required attributes
        ];

        $enrollmentService = new EnrollmentService();
        $enrolledParticipant = $enrollmentService->enrollParticipant($participantData);

        // Assert that a participant was successfully enrolled
        $this->assertInstanceOf(Participant::class, $enrolledParticipant);
        $this->assertEquals('Alice', $enrolledParticipant->child_name);
        // Add more assertions for other attributes as needed
    }
}

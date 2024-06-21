<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnrollmentFlowTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_enroll_through_the_form()
    {
        $response = $this->post('/enroll', [
            'child_name' => 'Alice',
            'address' => '123 Main St',
            'age_group' => '10-14 yrs',
            'hiv_status' => 'Negative',
            // Add other required attributes
        ]);

        $response->assertStatus(200); // Assuming successful enrollment redirects to a success page
        $this->assertDatabaseHas('participants', [
            'child_name' => 'Alice',
            // Add more assertions for other attributes as needed
        ]);
    }
}

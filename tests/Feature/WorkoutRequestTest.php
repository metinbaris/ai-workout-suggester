<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class WorkoutRequestTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_requires_all_fields()
    {
        $response = $this->post('/', []);
        $response->assertSessionHasErrors(['age', 'gender', 'height', 'weight', 'ion-rg-0', 'ion-rg-1']);
    }

    /** @test */
    public function it_validates_age_is_between_18_and_90()
    {
        $response = $this->post('/', ['age' => '']);
        $response->assertSessionHasErrors('age');

        $response = $this->post('/', ['age' => '17']);
        $response->assertSessionHasErrors('age');

        $response = $this->post('/', ['age' => '20']);
        $response->assertSessionDoesntHaveErrors('age');

        $response = $this->post('/', ['age' => '200']);
        $response->assertSessionHasErrors('age');
    }

    /** @test */
    public function it_validates_gender_is_within_allowed_values()
    {
        $response = $this->post('/', ['gender' => 'invalid']);
        $response->assertSessionHasErrors('gender');

        $response = $this->post('/', ['gender' => '']);
        $response->assertSessionHasErrors('gender');

        $response = $this->post('/', ['gender' => 'male']);
        $response->assertSessionDoesntHaveErrors('gender');

        $response = $this->post('/', ['gender' => 'female']);
        $response->assertSessionDoesntHaveErrors('gender');

        $response = $this->post('/', ['gender' => 'non-binary']);
        $response->assertSessionDoesntHaveErrors('gender');
    }
}

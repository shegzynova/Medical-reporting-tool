<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
// use App\Models\Patient;

class UserTest extends TestCase
{
    

    public function setUp() : void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        // $this->patients = Patient::factory()->create();
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    function test_user_creation_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('users.create'))
        ->assertSeeLivewire('create-user');
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    function test_patient_creation_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('patients.create'))
        ->assertSeeLivewire('patients');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    function test_homepage_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('homepage'))
        ->assertSeeLivewire('staff-user');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    function test_patients_page_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('patients'))
        ->assertSeeLivewire('patients-table');
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    function test_patients_observation_page_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('observation', 1))
        ->assertSeeLivewire('patient-observation');
    }

}

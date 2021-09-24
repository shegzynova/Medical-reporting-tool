<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;

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


    public function testLogin()
    {
        Livewire::test('login')
                    ->set('email', 'admin@admin.com')
                    ->set('password', 'Admin2021@')
                    ->call('loginUser')
                    ->assertRedirect(route('homepage'));
    }

    public function testLoginFailed()
    {
        Livewire::test('login')
                    ->set('email', 'admin@asdmin.com')
                    ->set('password', 'dsoslps@')
                    ->call('loginUser')
                    ->assertNoRedirect(route('homepage'));
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    function test_staff_creation(){
        Livewire::actingAs($this->user)
                    ->test('create-user')
                    ->set('first_name', 'John')
                    ->set('last_name', 'Doe')
                    ->set('email', 'admin@asdmin.com')
                    ->set('password', 'jsnisiw99wj')
                    ->set('role', 'admin')
                    ->call('addUser')
                    ->assertStatus(200);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    function test_if_validation_has_errors__staff_creation(){
        Livewire::test('create-user')
                    ->set('first_name', 'John')
                    ->set('last_name', 'Doe')
                    ->set('email', 'adminm')
                    ->set('password', 'jsnisiw99wj')
                    ->set('role', 'admin')
                    ->call('addUser')
                    ->assertHasErrors(['email']);
    }




}

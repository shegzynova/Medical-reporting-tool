<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;


class UserTest extends TestCase
{

    public function setUp() : void
    {
        parent::setUp();

        // The auth user we'll be using to test
        $this->user = User::factory()->create();
    }


    /**
     * Test if user create page has a component
     *
     * @return void
     */
    function test_user_creation_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('users.create'))
        ->assertSeeLivewire('create-user');
    }


    /**
     * Test if patient create page has a component.
     *
     * @return void
     */
    function test_patient_creation_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('patients.create'))
        ->assertSeeLivewire('patients');
    }

    /**
     * Test if homepage has a component
     *
     * @return void
     */
    function test_homepage_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('homepage'))
        ->assertSeeLivewire('staff-user');
    }

    /**
     * Test if patients has a component
     *
     * @return void
     */
    function test_patients_page_if_component_exists(){
        $this->actingAs($this->user)
        ->get(route('patients'))
        ->assertSeeLivewire('patients-table');
    }


    /**
     * Test login
     */
    public function testLogin()
    {
        Livewire::test('login')
                    ->set('email', 'admin@admin.com')
                    ->set('password', 'Admin2021@')
                    ->call('loginUser')
                    ->assertRedirect(route('homepage'));
    }

    /**
     * Test if login will fail
     */
    public function testLoginFailed()
    {
        Livewire::test('login')
                    ->set('email', 'admin@asdmin.com')
                    ->set('password', 'dsoslps@')
                    ->call('loginUser')
                    ->assertNoRedirect(route('homepage'));
    }


    /**
     * Test Creation of Staff.
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
     * Test if validation has errors
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

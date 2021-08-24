<?php

namespace Tests\Feature\Http\Controllers;

use App\EstadoCivil;
use App\Estadocivil;
use App\Name;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EstadoCivilController
 */
class EstadoCivilControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $estadoCivils = factory(EstadoCivil::class, 3)->create();

        $response = $this->get(route('estado-civil.index'));

        $response->assertOk();
        $response->assertViewIs('estadociviles.index');
        $response->assertViewHas('estadociviles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('estado-civil.create'));

        $response->assertOk();
        $response->assertViewIs('estadociviles.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstadoCivilController::class,
            'store',
            \App\Http\Requests\EstadoCivilStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('estado-civil.store'), [
            'name' => $name,
        ]);

        $estadoCivils = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $estadoCivils);
        $estadoCivil = $estadoCivils->first();

        $response->assertRedirect(route('estadocivil.index'));
        $response->assertSessionHas('estadocivil.name', $estadocivil->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $estadoCivil = factory(EstadoCivil::class)->create();

        $response = $this->get(route('estado-civil.show', $estadoCivil));

        $response->assertOk();
        $response->assertViewIs('estadocivil.show');
        $response->assertViewHas('estadocivil');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $estadoCivil = factory(EstadoCivil::class)->create();

        $response = $this->get(route('estado-civil.edit', $estadoCivil));

        $response->assertOk();
        $response->assertViewIs('estadocivil.edit');
        $response->assertViewHas('estadocivil');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EstadoCivilController::class,
            'update',
            \App\Http\Requests\EstadoCivilUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $estadoCivil = factory(EstadoCivil::class)->create();
        $estadocivil = $this->faker->word;

        $response = $this->put(route('estado-civil.update', $estadoCivil), [
            'estadocivil' => $estadocivil,
        ]);

        $response->assertRedirect(route('estadocivil.index'));
        $response->assertSessionHas('estadocivil.id', $estadocivil->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $estadoCivil = factory(EstadoCivil::class)->create();
        $estadoCivil = factory(Estadocivil::class)->create();

        $response = $this->delete(route('estado-civil.destroy', $estadoCivil));

        $response->assertRedirect(route('estadocivil.index'));

        $this->assertDeleted($estadoCivil);
    }
}

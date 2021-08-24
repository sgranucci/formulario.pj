<?php

namespace Tests\Feature\Http\Controllers;

use App\Actividad;
use App\Name;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ActividadController
 */
class ActividadControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $actividads = factory(Actividad::class, 3)->create();

        $response = $this->get(route('actividad.index'));

        $response->assertOk();
        $response->assertViewIs('actividades.index');
        $response->assertViewHas('actividades');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('actividad.create'));

        $response->assertOk();
        $response->assertViewIs('actividades.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ActividadController::class,
            'store',
            \App\Http\Requests\ActividadStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('actividad.store'), [
            'name' => $name,
        ]);

        $actividads = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $actividads);
        $actividad = $actividads->first();

        $response->assertRedirect(route('actividad.index'));
        $response->assertSessionHas('actividad.name', $actividad->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $actividad = factory(Actividad::class)->create();

        $response = $this->get(route('actividad.show', $actividad));

        $response->assertOk();
        $response->assertViewIs('actividad.show');
        $response->assertViewHas('actividad');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $actividad = factory(Actividad::class)->create();

        $response = $this->get(route('actividad.edit', $actividad));

        $response->assertOk();
        $response->assertViewIs('actividad.edit');
        $response->assertViewHas('actividad');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ActividadController::class,
            'update',
            \App\Http\Requests\ActividadUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $actividad = factory(Actividad::class)->create();
        $actividad = $this->faker->word;

        $response = $this->put(route('actividad.update', $actividad), [
            'actividad' => $actividad,
        ]);

        $response->assertRedirect(route('actividad.index'));
        $response->assertSessionHas('actividad.id', $actividad->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $actividad = factory(Actividad::class)->create();

        $response = $this->delete(route('actividad.destroy', $actividad));

        $response->assertRedirect(route('actividad.index'));

        $this->assertDeleted($actividad);
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use App\Name;
use App\OrigenFondo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\OrigenFondoController
 */
class OrigenFondoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $origenFondos = factory(OrigenFondo::class, 3)->create();

        $response = $this->get(route('origen-fondo.index'));

        $response->assertOk();
        $response->assertViewIs('origenFondos.index');
        $response->assertViewHas('origenFondos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('origen-fondo.create'));

        $response->assertOk();
        $response->assertViewIs('origenFondos.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrigenFondoController::class,
            'store',
            \App\Http\Requests\OrigenFondoStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('origen-fondo.store'), [
            'name' => $name,
        ]);

        $origenFondos = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $origenFondos);
        $origenFondo = $origenFondos->first();

        $response->assertRedirect(route('origenFondo.index'));
        $response->assertSessionHas('origenFondo.name', $origenFondo->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $origenFondo = factory(OrigenFondo::class)->create();

        $response = $this->get(route('origen-fondo.show', $origenFondo));

        $response->assertOk();
        $response->assertViewIs('origenFondo.show');
        $response->assertViewHas('origenFondo');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $origenFondo = factory(OrigenFondo::class)->create();

        $response = $this->get(route('origen-fondo.edit', $origenFondo));

        $response->assertOk();
        $response->assertViewIs('origenFondo.edit');
        $response->assertViewHas('origenFondo');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrigenFondoController::class,
            'update',
            \App\Http\Requests\OrigenFondoUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $origenFondo = factory(OrigenFondo::class)->create();
        $origenFondo = $this->faker->word;

        $response = $this->put(route('origen-fondo.update', $origenFondo), [
            'origenFondo' => $origenFondo,
        ]);

        $response->assertRedirect(route('origenFondo.index'));
        $response->assertSessionHas('origenFondo.id', $origenFondo->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $origenFondo = factory(OrigenFondo::class)->create();

        $response = $this->delete(route('origen-fondo.destroy', $origenFondo));

        $response->assertRedirect(route('origenFondo.index'));

        $this->assertDeleted($origenFondo);
    }
}

<?php

namespace Tests\Feature\Http\Controllers;

use App\Name;
use App\TipoRelacionLaboral;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TipoRelacionLaboralController
 */
class TipoRelacionLaboralControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tipoRelacionLaborals = factory(TipoRelacionLaboral::class, 3)->create();

        $response = $this->get(route('tipo-relacion-laboral.index'));

        $response->assertOk();
        $response->assertViewIs('tipoRelacionLaborales.index');
        $response->assertViewHas('tipoRelacionLaborales');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('tipo-relacion-laboral.create'));

        $response->assertOk();
        $response->assertViewIs('tipoRelacionLaborales.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipoRelacionLaboralController::class,
            'store',
            \App\Http\Requests\TipoRelacionLaboralStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('tipo-relacion-laboral.store'), [
            'name' => $name,
        ]);

        $tipoRelacionLaborals = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $tipoRelacionLaborals);
        $tipoRelacionLaboral = $tipoRelacionLaborals->first();

        $response->assertRedirect(route('tipoRelacionLaboral.index'));
        $response->assertSessionHas('tipoRelacionLaboral.name', $tipoRelacionLaboral->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tipoRelacionLaboral = factory(TipoRelacionLaboral::class)->create();

        $response = $this->get(route('tipo-relacion-laboral.show', $tipoRelacionLaboral));

        $response->assertOk();
        $response->assertViewIs('tipoRelacionLaboral.show');
        $response->assertViewHas('tipoRelacionLaboral');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tipoRelacionLaboral = factory(TipoRelacionLaboral::class)->create();

        $response = $this->get(route('tipo-relacion-laboral.edit', $tipoRelacionLaboral));

        $response->assertOk();
        $response->assertViewIs('tipoRelacionLaboral.edit');
        $response->assertViewHas('tipoRelacionLaboral');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipoRelacionLaboralController::class,
            'update',
            \App\Http\Requests\TipoRelacionLaboralUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tipoRelacionLaboral = factory(TipoRelacionLaboral::class)->create();
        $tipoRelacionLaboral = $this->faker->word;

        $response = $this->put(route('tipo-relacion-laboral.update', $tipoRelacionLaboral), [
            'tipoRelacionLaboral' => $tipoRelacionLaboral,
        ]);

        $response->assertRedirect(route('tipoRelacionLaboral.index'));
        $response->assertSessionHas('tipoRelacionLaboral.id', $tipoRelacionLaboral->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $tipoRelacionLaboral = factory(TipoRelacionLaboral::class)->create();

        $response = $this->delete(route('tipo-relacion-laboral.destroy', $tipoRelacionLaboral));

        $response->assertRedirect(route('tipoRelacionLaboral.index'));

        $this->assertDeleted($tipoRelacionLaboral);
    }
}

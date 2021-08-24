<?php

namespace Tests\Feature\Http\Controllers;

use App\Name;
use App\TipoDomicilio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TipoDomicilioController
 */
class TipoDomicilioControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tipoDomicilios = factory(TipoDomicilio::class, 3)->create();

        $response = $this->get(route('tipo-domicilio.index'));

        $response->assertOk();
        $response->assertViewIs('tipoDomicilios.index');
        $response->assertViewHas('tipoDomicilios');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('tipo-domicilio.create'));

        $response->assertOk();
        $response->assertViewIs('tipoDomicilios.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipoDomicilioController::class,
            'store',
            \App\Http\Requests\TipoDomicilioStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('tipo-domicilio.store'), [
            'name' => $name,
        ]);

        $tipoDomicilios = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $tipoDomicilios);
        $tipoDomicilio = $tipoDomicilios->first();

        $response->assertRedirect(route('tipoDomicilio.index'));
        $response->assertSessionHas('tipoDomicilio.name', $tipoDomicilio->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tipoDomicilio = factory(TipoDomicilio::class)->create();

        $response = $this->get(route('tipo-domicilio.show', $tipoDomicilio));

        $response->assertOk();
        $response->assertViewIs('tipoDomicilio.show');
        $response->assertViewHas('tipoDomicilio');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tipoDomicilio = factory(TipoDomicilio::class)->create();

        $response = $this->get(route('tipo-domicilio.edit', $tipoDomicilio));

        $response->assertOk();
        $response->assertViewIs('tipoDomicilio.edit');
        $response->assertViewHas('tipoDomicilio');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipoDomicilioController::class,
            'update',
            \App\Http\Requests\TipoDomicilioUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tipoDomicilio = factory(TipoDomicilio::class)->create();
        $tipoDomicilio = $this->faker->word;

        $response = $this->put(route('tipo-domicilio.update', $tipoDomicilio), [
            'tipoDomicilio' => $tipoDomicilio,
        ]);

        $response->assertRedirect(route('tipoDomicilio.index'));
        $response->assertSessionHas('tipoDomicilio.id', $tipoDomicilio->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $tipoDomicilio = factory(TipoDomicilio::class)->create();

        $response = $this->delete(route('tipo-domicilio.destroy', $tipoDomicilio));

        $response->assertRedirect(route('tipoDomicilio.index'));

        $this->assertDeleted($tipoDomicilio);
    }
}

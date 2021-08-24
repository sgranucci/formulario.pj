<?php

namespace Tests\Feature\Http\Controllers;

use App\Genero;
use App\Name;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GeneroController
 */
class GeneroControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $generos = factory(Genero::class, 3)->create();

        $response = $this->get(route('genero.index'));

        $response->assertOk();
        $response->assertViewIs('generos.index');
        $response->assertViewHas('generos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('genero.create'));

        $response->assertOk();
        $response->assertViewIs('generos.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GeneroController::class,
            'store',
            \App\Http\Requests\GeneroStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('genero.store'), [
            'name' => $name,
        ]);

        $generos = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $generos);
        $genero = $generos->first();

        $response->assertRedirect(route('genero.index'));
        $response->assertSessionHas('genero.name', $genero->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $genero = factory(Genero::class)->create();

        $response = $this->get(route('genero.show', $genero));

        $response->assertOk();
        $response->assertViewIs('genero.show');
        $response->assertViewHas('genero');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $genero = factory(Genero::class)->create();

        $response = $this->get(route('genero.edit', $genero));

        $response->assertOk();
        $response->assertViewIs('genero.edit');
        $response->assertViewHas('genero');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GeneroController::class,
            'update',
            \App\Http\Requests\GeneroUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $genero = factory(Genero::class)->create();
        $genero = $this->faker->word;

        $response = $this->put(route('genero.update', $genero), [
            'genero' => $genero,
        ]);

        $response->assertRedirect(route('genero.index'));
        $response->assertSessionHas('genero.id', $genero->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $genero = factory(Genero::class)->create();

        $response = $this->delete(route('genero.destroy', $genero));

        $response->assertRedirect(route('genero.index'));

        $this->assertDeleted($genero);
    }
}

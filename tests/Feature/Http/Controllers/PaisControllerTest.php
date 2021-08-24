<?php

namespace Tests\Feature\Http\Controllers;

use App\Name;
use App\Pai;
use App\Pais;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PaisController
 */
class PaisControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $pais = factory(Pais::class, 3)->create();

        $response = $this->get(route('pai.index'));

        $response->assertOk();
        $response->assertViewIs('paises.index');
        $response->assertViewHas('paises');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('pai.create'));

        $response->assertOk();
        $response->assertViewIs('paises.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PaisController::class,
            'store',
            \App\Http\Requests\PaisStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->word;

        $response = $this->post(route('pai.store'), [
            'name' => $name,
        ]);

        $pais = Name::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $pais);
        $pai = $pais->first();

        $response->assertRedirect(route('pais.index'));
        $response->assertSessionHas('pais.name', $pais->name);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $pai = factory(Pais::class)->create();

        $response = $this->get(route('pai.show', $pai));

        $response->assertOk();
        $response->assertViewIs('pais.show');
        $response->assertViewHas('pais');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $pai = factory(Pais::class)->create();

        $response = $this->get(route('pai.edit', $pai));

        $response->assertOk();
        $response->assertViewIs('pais.edit');
        $response->assertViewHas('pais');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PaisController::class,
            'update',
            \App\Http\Requests\PaisUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $pai = factory(Pais::class)->create();
        $pais = $this->faker->word;

        $response = $this->put(route('pai.update', $pai), [
            'pais' => $pais,
        ]);

        $response->assertRedirect(route('pais.index'));
        $response->assertSessionHas('pais.id', $pais->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $pai = factory(Pais::class)->create();

        $response = $this->delete(route('pai.destroy', $pai));

        $response->assertRedirect(route('pais.index'));

        $this->assertDeleted($pai);
    }
}

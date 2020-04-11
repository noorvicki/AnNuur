<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Kategori;

class KategoriApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_kategori()
    {
        $kategori = factory(Kategori::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/kategoris', $kategori
        );

        $this->assertApiResponse($kategori);
    }

    /**
     * @test
     */
    public function test_read_kategori()
    {
        $kategori = factory(Kategori::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/kategoris/'.$kategori->id
        );

        $this->assertApiResponse($kategori->toArray());
    }

    /**
     * @test
     */
    public function test_update_kategori()
    {
        $kategori = factory(Kategori::class)->create();
        $editedKategori = factory(Kategori::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/kategoris/'.$kategori->id,
            $editedKategori
        );

        $this->assertApiResponse($editedKategori);
    }

    /**
     * @test
     */
    public function test_delete_kategori()
    {
        $kategori = factory(Kategori::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/kategoris/'.$kategori->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/kategoris/'.$kategori->id
        );

        $this->response->assertStatus(404);
    }
}

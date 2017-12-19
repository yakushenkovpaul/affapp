<?php

use Tests\TestCase;
use App\Services\MerchantService;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MerchantServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->service = $this->app->make(MerchantService::class);
        $this->originalArray = [
            'id' => '1',
		'name' => 'nemo',
		'image' => '1',
		'description' => 'porro eum nisi cum',
		'seo_title' => 'dolorem',
		'seo_description' => 'debitis',
		'url' => 'cumque',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',

        ];
        $this->editedArray = [
            'id' => '1',
		'name' => 'nemo',
		'image' => '1',
		'description' => 'porro eum nisi cum',
		'seo_title' => 'dolorem',
		'seo_description' => 'debitis',
		'url' => 'cumque',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',

        ];
        $this->searchTerm = '';
    }

    public function testAll()
    {
        $response = $this->service->all();
        $this->assertEquals(get_class($response), 'Illuminate\Database\Eloquent\Collection');
        $this->assertTrue(is_array($response->toArray()));
        $this->assertEquals(0, count($response->toArray()));
    }

    public function testPaginated()
    {
        $response = $this->service->paginated(25);
        $this->assertEquals(get_class($response), 'Illuminate\Pagination\LengthAwarePaginator');
        $this->assertEquals(0, $response->total());
    }

    public function testSearch()
    {
        $response = $this->service->search($this->searchTerm, 25);
        $this->assertEquals(get_class($response), 'Illuminate\Pagination\LengthAwarePaginator');
        $this->assertEquals(0, $response->total());
    }

    public function testCreate()
    {
        $response = $this->service->create($this->originalArray);
        $this->assertEquals(get_class($response), 'App\Models\Merchant');
        $this->assertEquals(1, $response->id);
    }

    public function testFind()
    {
        // create the item
        $item = $this->service->create($this->originalArray);

        $response = $this->service->find($item->id);
        $this->assertEquals($item->id, $response->id);
    }

    public function testUpdate()
    {
        // create the item
        $item = $this->service->create($this->originalArray);

        $response = $this->service->update($item->id, $this->editedArray);

        $this->assertDatabaseHas('merchants', $this->editedArray);
    }

    public function testDestroy()
    {
        // create the item
        $item = $this->service->create($this->originalArray);

        $response = $this->service->destroy($item->id);
        $this->assertTrue($response);
    }
}
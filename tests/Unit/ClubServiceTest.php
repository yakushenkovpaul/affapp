<?php

use Tests\TestCase;
use App\Services\ClubService;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClubServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->service = $this->app->make(ClubService::class);
        $this->originalArray = [
            'id' => '1',
		'name' => 'rerum',
		'image' => 'consequatur',
		'url' => 'tenetur',
		'country' => 'voluptatem',
		'address' => 'quo',
		'zip' => 'consectetur',
		'contacts' => 'et',
		'bank_details' => 'et',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',

        ];
        $this->editedArray = [
            'id' => '1',
		'name' => 'rerum',
		'image' => 'consequatur',
		'url' => 'tenetur',
		'country' => 'voluptatem',
		'address' => 'quo',
		'zip' => 'consectetur',
		'contacts' => 'et',
		'bank_details' => 'et',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',

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
        $this->assertEquals(get_class($response), 'App\Models\Club');
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

        $this->assertDatabaseHas('clubs', $this->editedArray);
    }

    public function testDestroy()
    {
        // create the item
        $item = $this->service->create($this->originalArray);

        $response = $this->service->destroy($item->id);
        $this->assertTrue($response);
    }
}

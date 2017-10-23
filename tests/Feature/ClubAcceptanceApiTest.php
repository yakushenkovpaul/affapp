<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClubAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Club = factory(App\Models\Club::class)->make([
            'id' => '1',
		'name' => 'voluptatem',
		'image' => 'deleniti',
		'url' => 'non',
		'country' => 'numquam',
		'address' => 'aspernatur',
		'zip' => 'dolorum',
		'contacts' => 'labore',
		'bank_details' => 'consequuntur',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',

        ]);
        $this->ClubEdited = factory(App\Models\Club::class)->make([
            'id' => '1',
		'name' => 'voluptatem',
		'image' => 'deleniti',
		'url' => 'non',
		'country' => 'numquam',
		'address' => 'aspernatur',
		'zip' => 'dolorum',
		'contacts' => 'labore',
		'bank_details' => 'consequuntur',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/clubs');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/clubs', $this->Club->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/clubs', $this->Club->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/clubs/1', $this->ClubEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('clubs', $this->ClubEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/clubs', $this->Club->toArray());
        $response = $this->call('DELETE', 'api/v1/clubs/'.$this->Club->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'club was deleted']);
    }

}

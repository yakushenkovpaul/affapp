<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SaleAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Sale = factory(App\Models\Sale::class)->make([
            'id' => '1',
		'status' => '1',
		'value' => '1.1',
		'comission' => '1.1',
		'merchant_id' => '1',
		'user_id' => '1',
		'club_id' => '1',
		'service_fee' => '1.1',
		'commission' => '1.1',
		'updated_at' => 'eius',
		'created_at' => 'fugit',

        ]);
        $this->SaleEdited = factory(App\Models\Sale::class)->make([
            'id' => '1',
		'status' => '1',
		'value' => '1.1',
		'comission' => '1.1',
		'merchant_id' => '1',
		'user_id' => '1',
		'club_id' => '1',
		'service_fee' => '1.1',
		'commission' => '1.1',
		'updated_at' => 'eius',
		'created_at' => 'fugit',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/sales');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/sales', $this->Sale->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/sales', $this->Sale->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/sales/1', $this->SaleEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('sales', $this->SaleEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/sales', $this->Sale->toArray());
        $response = $this->call('DELETE', 'api/v1/sales/'.$this->Sale->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'sale was deleted']);
    }

}

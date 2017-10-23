<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SaleAcceptanceTest extends TestCase
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
		'updated_at' => 'praesentium',
		'created_at' => 'tenetur',

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
		'updated_at' => 'praesentium',
		'created_at' => 'tenetur',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'sales');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('sales');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'sales/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'sales', $this->Sale->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('sales/'.$this->Sale->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'sales', $this->Sale->toArray());

        $response = $this->actor->call('GET', '/sales/'.$this->Sale->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('sale');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'sales', $this->Sale->toArray());
        $response = $this->actor->call('PATCH', 'sales/1', $this->SaleEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('sales', $this->SaleEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'sales', $this->Sale->toArray());

        $response = $this->call('DELETE', 'sales/'.$this->Sale->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('sales');
    }

}

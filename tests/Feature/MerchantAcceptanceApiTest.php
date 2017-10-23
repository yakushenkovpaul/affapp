<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MerchantAcceptanceApiTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Merchant = factory(App\Models\Merchant::class)->make([
            'id' => '1',
		'name' => 'natus',
		'image' => '1',
		'description' => 'est voluptas odit adipisci',
		'seo_title' => 'sunt',
		'seo_description' => 'omnis',
		'url' => 'et',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',

        ]);
        $this->MerchantEdited = factory(App\Models\Merchant::class)->make([
            'id' => '1',
		'name' => 'natus',
		'image' => '1',
		'description' => 'est voluptas odit adipisci',
		'seo_title' => 'sunt',
		'seo_description' => 'omnis',
		'url' => 'et',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',

        ]);
        $user = factory(App\Models\User::class)->make();
        $this->actor = $this->actingAs($user);
    }

    public function testIndex()
    {
        $response = $this->actor->call('GET', 'api/v1/merchants');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'api/v1/merchants', $this->Merchant->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['id' => 1]);
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'api/v1/merchants', $this->Merchant->toArray());
        $response = $this->actor->call('PATCH', 'api/v1/merchants/1', $this->MerchantEdited->toArray());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertDatabaseHas('merchants', $this->MerchantEdited->toArray());
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'api/v1/merchants', $this->Merchant->toArray());
        $response = $this->call('DELETE', 'api/v1/merchants/'.$this->Merchant->id);
        $this->assertEquals(200, $response->getStatusCode());
        $this->seeJson(['success' => 'merchant was deleted']);
    }

}

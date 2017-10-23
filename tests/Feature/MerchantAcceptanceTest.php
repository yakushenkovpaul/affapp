<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MerchantAcceptanceTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Merchant = factory(App\Models\Merchant::class)->make([
            'id' => '1',
		'name' => 'sit',
		'image' => '1',
		'description' => 'quia blanditiis illum harum',
		'seo_title' => 'autem',
		'seo_description' => 'quia',
		'url' => 'labore',
		'status' => '1',
		'commission' => '1.1',
		'cashback' => '1.1',
		'rate' => '1',
		'added' => '1',

        ]);
        $this->MerchantEdited = factory(App\Models\Merchant::class)->make([
            'id' => '1',
		'name' => 'sit',
		'image' => '1',
		'description' => 'quia blanditiis illum harum',
		'seo_title' => 'autem',
		'seo_description' => 'quia',
		'url' => 'labore',
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
        $response = $this->actor->call('GET', 'merchants');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('merchants');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'merchants/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'merchants', $this->Merchant->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('merchants/'.$this->Merchant->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'merchants', $this->Merchant->toArray());

        $response = $this->actor->call('GET', '/merchants/'.$this->Merchant->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('merchant');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'merchants', $this->Merchant->toArray());
        $response = $this->actor->call('PATCH', 'merchants/1', $this->MerchantEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('merchants', $this->MerchantEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'merchants', $this->Merchant->toArray());

        $response = $this->call('DELETE', 'merchants/'.$this->Merchant->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('merchants');
    }

}

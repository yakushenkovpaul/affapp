<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClubAcceptanceTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->Club = factory(App\Models\Club::class)->make([
            'id' => '1',
		'name' => 'libero',
		'image' => 'deserunt',
		'url' => 'enim',
		'country' => 'impedit',
		'address' => 'quae',
		'zip' => 'ab',
		'contacts' => 'possimus',
		'bank_details' => 'ipsam',
		'fans' => '1',
		'total_commission' => '1.1',
		'total_paid' => '1.1',
		'rate' => '1',
		'fee' => '1.1',

        ]);
        $this->ClubEdited = factory(App\Models\Club::class)->make([
            'id' => '1',
		'name' => 'libero',
		'image' => 'deserunt',
		'url' => 'enim',
		'country' => 'impedit',
		'address' => 'quae',
		'zip' => 'ab',
		'contacts' => 'possimus',
		'bank_details' => 'ipsam',
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
        $response = $this->actor->call('GET', 'clubs');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('clubs');
    }

    public function testCreate()
    {
        $response = $this->actor->call('GET', 'clubs/create');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testStore()
    {
        $response = $this->actor->call('POST', 'clubs', $this->Club->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('clubs/'.$this->Club->id.'/edit');
    }

    public function testEdit()
    {
        $this->actor->call('POST', 'clubs', $this->Club->toArray());

        $response = $this->actor->call('GET', '/clubs/'.$this->Club->id.'/edit');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertViewHas('club');
    }

    public function testUpdate()
    {
        $this->actor->call('POST', 'clubs', $this->Club->toArray());
        $response = $this->actor->call('PATCH', 'clubs/1', $this->ClubEdited->toArray());

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertDatabaseHas('clubs', $this->ClubEdited->toArray());
        $this->assertRedirectedTo('/');
    }

    public function testDelete()
    {
        $this->actor->call('POST', 'clubs', $this->Club->toArray());

        $response = $this->call('DELETE', 'clubs/'.$this->Club->id);
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertRedirectedTo('clubs');
    }

}

<?php

namespace Clarkeash\Doorman\Test\Feature;

use Carbon\Carbon;
use Clarkeash\Doorman\Models\Invite;
use Doorman;
use Clarkeash\Doorman\Test\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PHPUnit\Framework\Assert;

class GenerateInvitesTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function it_will_generate_one_invite_by_default()
    {
        Doorman::generate()->make();

        Assert::assertCount(1, Invite::all());
    }

    /**
     * @test
     */
    public function it_can_generate_multiple_invites()
    {
        Doorman::generate()->times(5)->make();

        Assert::assertCount(5, Invite::all());
    }

    /**
     * @test
     */
    public function it_has_one_use_by_default()
    {
        Doorman::generate()->make();

        $invite = Invite::first();

        Assert::assertEquals(1, $invite->max);
    }

    /**
     * @test
     */
    public function it_can_have_multiple_uses()
    {
        Doorman::generate()->uses(10)->make();

        $invite = Invite::first();

        Assert::assertEquals(10, $invite->max);
    }

    /**
     * @test
     */
    public function it_can_have_an_expiry_date()
    {
        $date = Carbon::now( 'UTC')->endOfDay();

        Doorman::generate()->expiresOn($date)->make();

        $invite = Invite::first();

        Assert::assertEquals($date, $invite->valid_until);
    }

    /**
     * @test
     */
    public function it_has_helper_to_set_number_of_days_in_future_to_expire()
    {
        Doorman::generate()->expiresIn(7)->make();

        $invite = Invite::first();

        $date = Carbon::now('UTC')->addDays(7)->endOfDay();

        Assert::assertEquals($date, $invite->valid_until);
    }

    /**
     * @test
     */
    public function it_can_be_valid_for_a_single_email()
    {
        Doorman::generate()->for('me@ashleyclarke.me')->make();

        $invite = Invite::first();

        Assert::assertEquals('me@ashleyclarke.me', $invite->for);
    }
}

<?php

namespace Clarkeash\Doorman;

class Doorman
{
    public function redeem($code, $email = null)
    {
        return (new Manager)->redeem($code, $email);
    }

    public function available($user, $email = null)
    {
        return (new Manager)->available($user, $email);
    }

    public function check($code, $email = null)
    {
        return (new Manager)->check($code, $email);
    }

    public function generate()
    {
        return new Generator;
    }
}

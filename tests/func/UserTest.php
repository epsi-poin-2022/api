<?php

namespace App\Tests\func;

class UserTest extends CustomApiTestCase
{
    public function testLogin(): void
    {
        $client = self::createClient();
        $this->createUser('magali.pannetier@campus-cd.com', '0000');
        $this->logIn($client, 'magali.pannetier@campus-cd.com', '0000');
    }
}

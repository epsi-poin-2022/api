<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\JobDescription;
use Symfony\Component\HttpFoundation\Request;

class UserTest extends ApiTestCase
{
    public function testLogin(): void
    {
        $client = self::createClient();
        $client->request('POST', '/api/login', ['json' => [
            'username' => 'samuel.challe@epsi.fr',
            'password' => '0000',
        ]]);

        $this->assertResponseIsSuccessful();
    }

    public function testLoginWithInvalidCredentials(): void
    {
        $client = self::createClient();
        $client->request('POST', '/api/login', ['json' => [
            'username' => 'samuel.challe@epsi.fr',
            'password' => 'fakepassword',
        ]]);

        $this->assertResponseStatusCodeSame('401');
    }

    public function testLogout(): void
    {
        $client = self::createClient();
        $client->request('POST', '/api/logout');

        $this->assertResponseIsSuccessful();
    }
}

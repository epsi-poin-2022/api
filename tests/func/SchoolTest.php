<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\School;
use Symfony\Component\HttpFoundation\Request;

class SchoolTest extends ApiTestCase
{
    public function testGetSchools(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/schools');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/School',
            '@id' => '/api/schools',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 9,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(School::class);
    }
}

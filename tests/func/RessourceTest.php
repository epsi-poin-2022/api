<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Ressource;
use Symfony\Component\HttpFoundation\Request;

class RessourceTest extends ApiTestCase
{
    public function testGetRessources(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/ressources');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/Ressource',
            '@id' => '/api/ressources',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 7,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(Ressource::class);
    }
}

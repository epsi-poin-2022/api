<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Picture;
use Symfony\Component\HttpFoundation\Request;

class PictureTest extends ApiTestCase
{
    public function testGetPictures(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/pictures');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/Picture',
            '@id' => '/api/pictures',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 19,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(Picture::class);
    }
}

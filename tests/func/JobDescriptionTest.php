<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\JobDescription;
use Symfony\Component\HttpFoundation\Request;

class JobDescriptionTest extends ApiTestCase
{
    public function testGetJobDescriptions(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/job_descriptions');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/JobDescription',
            '@id' => '/api/job_descriptions',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 10,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(JobDescription::class);
    }
}

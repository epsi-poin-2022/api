<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\JobTitle;
use Symfony\Component\HttpFoundation\Request;

class JobTitleTest extends ApiTestCase
{
    public function testGetJobTitles(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/job_titles');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/JobTitle',
            '@id' => '/api/job_titles',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 17,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(JobTitle::class);
    }
}

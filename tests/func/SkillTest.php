<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Skill;
use Symfony\Component\HttpFoundation\Request;

class SkillTest extends ApiTestCase
{
    public function testGetSkills(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/skills');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/Skill',
            '@id' => '/api/skills',
            '@type' => 'hydra:Collection',
            'hydra:totalItems' => 10,
        ]);
        $this->assertMatchesResourceCollectionJsonSchema(Skill::class);
    }
}

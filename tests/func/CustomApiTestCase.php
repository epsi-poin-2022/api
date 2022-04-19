<?php

namespace App\Tests\func;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class CustomApiTestCase extends ApiTestCase
{

    /**
     * @param string $email
     * @param string $plaintextPassword
     *
     * @return User
     */
    protected function createUser(string $email, string $plaintextPassword): User
    {
        $user = new User();
        $user->setEmail($email);
        $hashPassword = self::getContainer()->get('security.user_password_hasher')->hashPassword($user, $plaintextPassword);
        $user->setPassword($hashPassword);
        $entityManager = self::getContainer()->get(EntityManagerInterface::class);
        $entityManager->persist($user);
        $entityManager->flush();

        return $user;
    }

    /**
     * @param Client $client
     * @param string $email
     * @param string $password
     *
     * @return void
     */
    protected function logIn(Client $client, string $email, string $password)
    {
        $client->request(Request::METHOD_POST, '/api/login', ['json' => [
            'username' => $email,
            'password' => $password,
        ]]);

        $this->assertResponseIsSuccessful();
    }

    /**
     * @param Client $client
     * @param string $email
     * @param string $password
     *
     * @return User
     */
    protected function createUserAndLogIn(Client $client, string $email, string $password): User
    {
        $user = $this->createUser($email, $password);
        $this->logIn($client, $email, $password);

        return $user;
    }
}

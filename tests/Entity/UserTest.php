<?php

namespace Entity;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class UserTest extends ApiTestCase
{
    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function testCollection(): void
    {
        $client = static::createClient();
        $baseUrl = 'http://localhost:8000';

        // 🔹 Étape 1 : Authentification et récupération du token
        $response = $client->request('POST', $baseUrl.'/auth', [
            'json' => [
                'email' => 'roman23@example.net',
                'password' => 'azertyuiop',
            ],
        ]);

        // Vérifie que l'authentification a réussi
        $this->assertResponseIsSuccessful();

        // Récupérer le token
        $data = $response->toArray();
        $this->assertArrayHasKey('token', $data, 'Le token n\'a pas été retourné');
        $token = $data['token'];

        // 🔹 Étape 2 : Requête protégée avec le token
        $response = $client->request('GET', $baseUrl.'/api/users', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@context' => '/api/contexts/User',
            '@type' => 'Collection',
        ]);
    }
}

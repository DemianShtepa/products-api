<?php

declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use Illuminate\Contracts\Config\Repository;

final class ProductsRepository
{
    private Repository $repository;
    private Client $httpClient;

    public function __construct(Repository $repository, Client $httpClient)
    {
        $this->repository = $repository;
        $this->httpClient = $httpClient;
    }

    public function getAll(): array
    {
        $url = (string)$this->repository->get('app.products_api_url');

        $response = $this->httpClient->get($url);

        return json_decode($response->getBody()->getContents(), true);
    }
}
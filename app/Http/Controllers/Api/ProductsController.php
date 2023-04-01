<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Service\ProductsRepository;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;

final class ProductsController
{
    private ResponseFactory $responseFactory;
    private ProductsRepository $productsRepository;

    public function __construct(ResponseFactory $responseFactory, ProductsRepository $productsRepository)
    {
        $this->responseFactory = $responseFactory;
        $this->productsRepository = $productsRepository;
    }

    public function getProducts(): JsonResponse
    {
        return $this->responseFactory->json($this->productsRepository->getAll());
    }
}
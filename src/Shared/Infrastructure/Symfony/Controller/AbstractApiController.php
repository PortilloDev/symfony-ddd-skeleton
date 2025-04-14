<?php

namespace App\Shared\Infrastructure\Symfony\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AbstractApiController extends AbstractController
{

    protected function success(mixed $data = null, int $status = 200): JsonResponse
    {
        return new JsonResponse($data, $status);
    }

    protected function badRequest(string $message, ?array $errors = null, int $status = 400): JsonResponse
    {
        return new JsonResponse(['message' => $message, 'errors' => $errors], $status);
    }

}
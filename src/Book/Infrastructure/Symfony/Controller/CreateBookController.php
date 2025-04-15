<?php

namespace App\Book\Infrastructure\Symfony\Controller;

use App\Book\Application\CreateBookAction;
use App\Book\Infrastructure\Symfony\Request\CreateBookPayload;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;

class CreateBookController extends AbstractController
{
    public function __construct(private CreateBookAction $createBookAction)
    {
    }

    #[Route('/api/v1/books', name: 'create_book', methods: ['POST'])]
    public function __invoke(
        #[MapRequestPayload] CreateBookPayload $payload
    ): JsonResponse
    {
        $bookId = $this->createBookAction->__invoke($payload->author, $payload->title, $payload->pages);
        
        return new JsonResponse(['id' => $bookId]);
    }
}
<?php

namespace App\Book\Infrastructure\Symfony\Controller;

use App\Book\Application\ListBookAction;
use App\Book\Application\CreateBookAction;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Book\Infrastructure\Symfony\Response\BookCollection;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use App\Book\Infrastructure\Symfony\Request\CreateBookPayload;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Shared\Infrastructure\Symfony\Controller\AbstractApiController;
use Symfony\Component\HttpFoundation\Request;

class ListBooksController extends AbstractApiController
{
    public function __construct(private ListBookAction $action)
    {
    }

    #[Route('/api/v1/books', name: 'list_book', methods: ['GET'])]
    public function __invoke(
        Request $request
    ): JsonResponse
    {
        $response= $this->action->__invoke();
        
        return $this->success(new BookCollection($response));
    }
}
<?php 

namespace App\Book\Application;

use App\Book\Domain\Contract\BookRepositoryInterface;
use App\Book\Domain\Model\Book;

class CreateBookAction
{
    public function __construct(private BookRepositoryInterface $bookRepository)
    {

    }

    public function __invoke(string $author, string $title, int $pages): int
    {
        $book = new Book(
            title: $title,
            author: $author,
            pages: $pages
        );
        $this->bookRepository->save($book);

        return $book->getId();
    }

}
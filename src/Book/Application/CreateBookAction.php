<?php 

namespace App\Book\Application;

use App\Book\Domain\Model\Book;
use Symfony\Component\Uid\Uuid;
use App\Book\Domain\Contract\BookRepositoryInterface;

class CreateBookAction
{
    public function __construct(private BookRepositoryInterface $bookRepository)
    {

    }

    public function __invoke(string $author, string $title, int $pages): string
    {
        $book = new Book(
            id:  Uuid::v4()->toString(),
            title: $title,
            author: $author,
            pages: $pages
        );
        $this->bookRepository->save($book);

        return $book->getId();
    }

}
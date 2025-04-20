<?php 

namespace App\Book\Infrastructure\Symfony\Response;

use App\Book\Domain\Model\Book;
use JsonSerializable;

class BookSchema implements JsonSerializable
{
    public function __construct(private Book $book)
    {}

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->book->getId(),
            'title' => $this->book->getTitle(),
            'author' => $this->book->getAuthor(),
            'pages' => $this->book->getPages(),
        ];
    }
}
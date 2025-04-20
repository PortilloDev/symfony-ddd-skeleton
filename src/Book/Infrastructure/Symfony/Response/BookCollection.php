<?php 

namespace App\Book\Infrastructure\Symfony\Response;

use App\Book\Domain\Model\Book;
use JsonSerializable;



class BookCollection implements JsonSerializable
{

    public function __construct(private array $response)
    {

    }

    public function jsonSerialize(): array
    {
        return array_map(fn(Book $book)=> new BookSchema($book), $this->response);
    }

}
<?php 

namespace App\Book\Domain\Contract;

use App\Book\Domain\Model\Book;

interface BookRepositoryInterface
{
    public function findById(int $id): ?Book;

    public function save(Book $book): void;

    public function remove(Book $book): void;
}
<?php 
namespace App\Book\Infrastructure\Persistence\Orm;

use App\Book\Domain\Model\Book;
use Doctrine\Persistence\ManagerRegistry;
use App\Book\Domain\Exception\BookNotFoundException;
use App\Book\Domain\Contract\BookRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class BookRepository extends ServiceEntityRepository implements BookRepositoryInterface
{
    public function __construct(private ManagerRegistry $registry) 
    {
        parent::__construct($registry, Book::class);
    }
    protected static function entityClass(): string
    {
        return Book::class;
    }

    public function findById(int $id): Book|null
    {
        if (null === $book = $this->findById    ($id)) {
            throw BookNotFoundException::fromEmail($id);
        }
        return $book;
    }

    public function save(Book $book): void
    {
        $this->save($book);
        $this->flush();
    }

    public function remove(Book $book): void
    {
        $this->remove($book);
        $this->flush();
    }

}
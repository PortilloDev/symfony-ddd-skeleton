<?php 
namespace App\User\Infrastructure\Persistence\Repository;

use App\Book\Domain\Model\Book;
use App\User\Domain\Entity\User;
use App\User\Domain\Exception\UserNotFoundException;
use App\Book\Domain\Contract\BookRepositoryInterface;
use App\Shared\Infrastructure\Doctrine\BaseRepository;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    protected static function entityClass(): string
    {
        return Book::class;
    }

    public function findById(int $id): Book|null
    {
        if (null === $user = $this->objectRepository->findOneBy(['email' => $email])) {
            throw UserNotFoundException::fromEmail($email);
        }
        return $user;
    }

    public function save(User $user): void
    {
        $this->saveEntity($user);
    }

    public function remove(User $user): void
    {
        $this->removeEntity($user);
    }

}
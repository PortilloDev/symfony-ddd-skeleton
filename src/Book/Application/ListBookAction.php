<?php 
namespace App\Book\Application;

use App\Book\Domain\Contract\BookRepositoryInterface;
use PhpParser\Node\Expr\Cast\Array_;

class ListBookAction
{
    public function __construct(
        private BookRepositoryInterface $bookRepositoryInterface
    )
    {

    }

    public function __invoke(): Array
    {
        return $this->bookRepositoryInterface->getAll();
    }
}
<?php 

namespace App\Book\Infrastructure\Symfony\Request;

use Symfony\Component\Validator\Constraints as Assert;

class CreateBookPayload
{
    public function __construct(
        #[Assert\NotBlank]
        public string $author,
        #[Assert\NotBlank]
        public string $title,
        #[Assert\NotBlank]
        public int $pages,
    ){}

}
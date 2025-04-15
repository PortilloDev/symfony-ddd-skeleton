<?php

namespace App\Book\Domain\Exception;

class BookNotFoundException extends \Exception
{
    private const MESSAGE = 'Book with this id %s not found';
    public static function fromEmail(string $id): self
    {
        throw new self(sprintf(self::MESSAGE, $id));
    }
}
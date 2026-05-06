<?php

declare(strict_types=1);

namespace App\Entity;

class Book
{
    private int $id;
    private string $title;
    private string $author;
    private int $year;
    private string $genre;

    public function __construct(
        string $title,
        string $author,
        int $year,
        string $genre
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }
}
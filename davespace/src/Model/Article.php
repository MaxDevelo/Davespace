<?php

declare(strict_types=1);

namespace App\Model;

class Article
{
    /**
     * _construct.
     *
     * @return void
     */
    public function __construct(
        private string $title,
        private string $description,
        private string $date,
    ) {
    }

    /**
     * getTitle.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * getDescription.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * getDate.
     */
    public function getDate(): string
    {
        return $this->date;
    }
}

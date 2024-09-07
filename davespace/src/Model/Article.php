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
        private int $id,
        private string $title,
        private string $description,
        private string $date,
        private string $imageUrl
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}

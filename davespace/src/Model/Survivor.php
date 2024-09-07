<?php

declare(strict_types=1);

namespace App\Model;

use SurvivorGenreEnum;
use SurvivorStatusEnum;

class Survivor
{
    /**
     * _construct.
     *
     * @return void
     */
    public function __construct(
        private int $id,
        private string $name,
        private SurvivorGenreEnum $genre,
        private int $age,
        private SurvivorStatusEnum $status
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre->value;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status->value;
    }
}

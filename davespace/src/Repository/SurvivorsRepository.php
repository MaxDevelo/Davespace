<?php
declare(strict_types= 1);

namespace App\Repository;

use App\Model\Survivor;
use SurvivorGenreEnum;
use SurvivorStatusEnum;

class SurvivorsRepository
{    
    /**
     * @return array
     */
    public function findAll(): array
    {
        return  [
            new Survivor(
                1,
                'Rick Grimes',
                SurvivorGenreEnum::MEN,
                50,
                SurvivorStatusEnum::ALIVE
            )
        ];

    }
    
    /**
     * @param int $id
     * @return Survivor
     */
    public function findById(int $id): ?Survivor
    {
        foreach($this->findAll() as $survivor) {
            if ($survivor->getId() === $id) {
                return $survivor;
            }
        }

        return null;
    }
}
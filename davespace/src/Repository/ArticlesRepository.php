<?php
declare(strict_types= 1);

namespace App\Repository;

use App\Model\Article;

class ArticlesRepository
{    
    /**
     * @return array
     */
    public function findAll(): array
    {
        return  [
            new Article(
                'The Wall',
                'This is just a Wall L O L',
                (new \DateTime())->format('Y-m-d'),
            ),
            new Article(
                'The Wall 2',
                'This is just a Wall L O L',
                (new \DateTime())->format('Y-m-d'),
            ),
        ];

    }
}
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
                1,
                'The Wall',
                'This is just a Wall L O L',
                (new \DateTime())->format('Y-m-d'),
            ),
            new Article(
                2,
                'The Wall 2',
                'This is just a Wall L O L',
                (new \DateTime())->format('Y-m-d'),
            ),
        ];

    }
    
    /**
     * @param int $id
     * @return Article
     */
    public function findById(int $id): ?Article
    {
        foreach($this->findAll() as $article) {
            if ($article->getId() === $id) {
                return $article;
            }
        }

        return null;
    }
}
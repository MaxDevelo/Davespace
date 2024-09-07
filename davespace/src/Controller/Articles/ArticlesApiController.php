<?php

declare(strict_types=1);

namespace App\Controller\Articles;

use App\Model\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticlesApiController extends AbstractController
{
    #[Route('/api/articles')]
    public function getCollection(): Response
    {
        $articles = [
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

        return $this->json($articles);
    }
}

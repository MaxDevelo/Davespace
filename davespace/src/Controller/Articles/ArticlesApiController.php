<?php

declare(strict_types=1);

namespace App\Controller\Articles;

use App\Model\Article;
use App\Repository\ArticlesRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticlesApiController extends AbstractController
{
    #[Route('/api/articles')]
    public function getCollection(ArticlesRepository $articlesRepository): Response
    {
        $articles = $articlesRepository->findAll();
        return $this->json($articles);
    }
}

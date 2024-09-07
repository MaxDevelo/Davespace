<?php

declare(strict_types=1);

namespace App\Controller\Articles;

use App\Model\Article;
use App\Repository\ArticlesRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/articles')]
class ArticlesApiController extends AbstractController
{
    /**
     * @param  mixed $articlesRepository
     * @return Response
     */
    #[Route('', methods: ['GET'])]    
    public function getCollection(ArticlesRepository $articlesRepository): Response
    {
        $articles = $articlesRepository->findAll();
        return $this->json($articles);
    }

    /**
     * @param  mixed $id
     * @param  mixed $articlesRepository
     * @return Response
     */
    #[Route('/{id<\d+>}', methods: ['GET'])]    
    public function getArticleById(int $id, ArticlesRepository $articlesRepository): Response
    {
        $article = $articlesRepository->findById($id);

        if(!$article) {
            throw $this->createNotFoundException("Article with id $id not exists !");
        }

        return $this->json($article);
    }
}

<?php

declare(strict_types=1);

namespace App\Controller\Articles;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Controller: ArticleController
 */
class ArticleController extends AbstractController
{
    #[Route('/article/{id<\d+>}', name: 'app_article_show')]
    public function show(int $id, ArticlesRepository $articlesRepository): Response
    {
        $article = $articlesRepository->findById($id);

        if(!$article) {
            throw $this->createNotFoundException("Ah shit, here we go again ! The article with id $id not exists..");
        }
        return $this->render('pages/article/article.html.twig',
            [
                'article' => $article
            ]
        );
    }
}

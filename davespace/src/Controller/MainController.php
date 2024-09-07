<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\SurvivorsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Controller: MainController
 */
class MainController extends AbstractController
{
    public const TITLE_HOMEPAGE = 'the walking dead';

    /**
     * homepage.
     */
    #[Route('/', name: 'homepage')]
    public function homepage(SurvivorsRepository $survivorsRepository): Response
    {
        $survivors = $survivorsRepository->findAll();
        return $this->render('pages/home.html.twig',
            [
                'title' => self::TITLE_HOMEPAGE,
                'survivors' => $survivors
            ]
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Controller: MainController
 */
class MainController extends AbstractController
{
    public const TITLE_HOMEPAGE = 'davespace';

    /**
     * homepage.
     */
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('pages/home.html.twig',
            [
                'title' => self::TITLE_HOMEPAGE,
            ]
        );
    }
}

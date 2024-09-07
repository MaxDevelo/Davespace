<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Controller: MainController
 */
class MainController
{
    /**
     * homepage.
     */
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<h1>Hello, World !</h1>');
    }
}

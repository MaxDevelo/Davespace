<?php

declare(strict_types=1);

namespace App\Controller\Survivor;

use App\Repository\SurvivorsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @Controller: SurvivorController
 */
class SurvivorController extends AbstractController
{
    #[Route('/survivor/{id<\d+>}', name: 'app_survivor_show')]
    public function show(int $id, SurvivorsRepository $survivorsRepository): Response
    {
        $survivor = $survivorsRepository->findById($id);

        if(!$survivor) {
            throw $this->createNotFoundException("Ah shit, here we go again ! The survivor with id $id not exists..");
        }
        return $this->render('pages/survivor/survivor.html.twig',
            [
                'survivor' => $survivor
            ]
        );
    }
}

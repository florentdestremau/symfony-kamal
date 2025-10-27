<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function home(): Response
    {
        $readme = (string) file_get_contents(__DIR__ . '/../../README.md');

        return $this->render('home.html.twig', ['readme' => $readme]);
    }

    #[Route('/up', name: 'app_up')]
    public function up(EntityManagerInterface $entityManager): Response
    {
        $startTime = microtime(true);

        $dbStartTime = microtime(true);
        $entityManager->getConnection()->executeQuery('SELECT 1');
        $dbTime = (microtime(true) - $dbStartTime) * 1000;

        $totalTime = (microtime(true) - $startTime) * 1000;

        $response = sprintf(
            "OK database: Up - %.3fms - Total Time - %.3fms",
            $dbTime,
            $totalTime,
        );

        return new Response($response);
    }
}

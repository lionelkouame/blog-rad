<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $test = "je suis un tests";

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}

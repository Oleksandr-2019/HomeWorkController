<?php
// src/Controller/WelcomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{

    /**
     * @Route("/welcome/happynumber")
     */
    public function happynumber()
    {
        $number = random_int(0, 100);

        return $this->render('welcome/happynumber.html.twig', [
            'happynumber' => $number,
        ]);
    }
}
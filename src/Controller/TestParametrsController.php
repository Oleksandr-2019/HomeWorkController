<?php
// src/Controller/TestParametrsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestParametrsController extends AbstractController
{

    /**
     * @Route("/blog/{page}", name="Number Name my custom TestParametrsController route", requirements={"page"="\d+"})
     */
    public function list(int $page=1)
    {
        return new Response ('<html><body>Це нумерована адрема сторінки</body></html>');
    }

    /**
     * @Route("/blog/{slug}", name="Text Name my custom TestParametrsController route")
     */
    public function show($slug)
    {
        echo gettype($slug);
        return new Response ('<html><body>Це текстова адреса сторінки'.$slug.'</body></html>');
    }
}
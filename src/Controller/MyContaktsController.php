<?php
// src/Controller/TestParametrsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MyContaktsController
{
    public function show()
    {
        return new Response(
            '<html><body>Це тестова сторінка виведення контенту з допомогою роута PHP</body></html>'
        );
    }
}
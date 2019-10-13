<?php
// src/Controller/DiagramaController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class DiagramaController
{
    /**
     * @Route("/otvet/mynumber")
     */
    public function mynumber()
    {
        $mynumber = 222222;
        return new Response(
            '<html><body>Diagrama happynumber: '.$mynumber.' </body></html>'
        );
    }
}
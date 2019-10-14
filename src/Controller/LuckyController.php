<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class LuckyController
{
    public function number()
    {
        $number = random_int(0, 100);


        return new Response(
            '<html><body>Lucky happy number: '.$number.'</body></html>'

        );



    }


}
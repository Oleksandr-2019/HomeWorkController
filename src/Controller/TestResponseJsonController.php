<?php
// src/Controller/TestResponseJsonController.php
namespace App\Controller;

use App\Services\TestJsonService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class TestResponseJsonController extends AbstractController
{
    /**
     * @Route("/my-response-json")
     */
    public function index()
    {

        $person = new TestJsonService();
        $person->setName('foo');
        $person->setAge(99);
        $person->setSportsperson(false);


        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($person, 'json');

        return new Response ($jsonContent);

    }
}


/*
class TestResponseJsonController
{


    public function index(){
        $vid = array('username' => 'jane.doe');
        $vidresp = $this->json($vid);
     //   return $this->json(array('username' => 'jane.doe'));
        //$d = array('foo' => 'bar', 'baz' => 'long');
        //echo json_encode($d);

        return $this->render( $vidresp );

    }

};


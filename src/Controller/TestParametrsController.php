<?php
// src/Controller/TestParametrsController.php
namespace App\Controller;

use App\Services\TestParametrsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TestParametrsController extends AbstractController
{

    /**
     * @Route("/blog/{page}", name="number_name_url", requirements={"page"="\d+"})
     */
    public function list(int $page=1)
    {
        $user = new TestParametrsService();
        $user->setName('Sasha');

        // generate a URL with no route arguments
        $signUpPage = $this->generateUrl('number_name_url');
        echo ($signUpPage . "</br>");

        // generate a URL with route arguments
        $userProfilePage = $this->generateUrl('number_name_url', [
            'username' => $user->getUsername(),
        ]);
        echo ($userProfilePage . "</br>");

        // generated URLs are "absolute paths" by default. Pass a third optional
        // argument to generate different URLs (e.g. an "absolute URL")
        $signUpPageAbsouteUrl = $this->generateUrl('number_name_url', [], UrlGeneratorInterface::ABSOLUTE_URL);
        echo ($signUpPageAbsouteUrl . "</br>");

        // when a route is localized, Symfony uses by default the current request locale
        // pass a different '_locale' value if you want to set the locale explicitly
        $signUpPageInDutch = $this->generateUrl('number_name_url', ['_locale' => 'nl']);
        echo $signUpPageInDutch;

        $statementFact = 'Це нумерована адрема сторінки';

        return $this->render('TestParametrs/TestParametrs.html.twig', [
            'statementFact' => $statementFact,
            'slug' => false
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="text_name_url")
     */
    public function show($slug)
    {
        $statementFact = 'Це текстова адреса сторінки';
        return $this->render('TestParametrs/TestParametrs.html.twig', [
            'statementFact' => $statementFact,
            'slug' => $slug
        ]);
    }
}
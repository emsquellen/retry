<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class MainController extends AbstractController
{
    #[Route('/', name: 'hello')]
    public function list() : Response
    {
        return $this->render('daashboardcontent.html.twig');
    }
}
<?php

namespace App\Controller;

use App\Enum\LinkEnum;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $devProjects = LinkEnum::getDevProjects();
        $motionProjects = LinkEnum::getMotionProjects();

        return $this->render('home/index.html.twig', [
            'motionProjects' => $motionProjects,
            'devProjects' => $devProjects,
        ]);
    }
}

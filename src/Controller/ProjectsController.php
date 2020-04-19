<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $post = json_decode($request->getContent(), true);

        return $this->json(['hello' => $post]);
    }
}

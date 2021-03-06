<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/course-technologies", name="api_course_technologies_")
 */
class CourseTechnologiesController extends AbstractController
{
    /**
     * @Route("", name="list", methods={"GET"})
     */
    public function courseTechnologiesList(Request $request): Response
    {
        return $this->json([
            [
                'title' => 'PHP',
                'code' => 'php',
                'description' => '...',
                'logo' => '...',
            ]
        ]);
    }
}
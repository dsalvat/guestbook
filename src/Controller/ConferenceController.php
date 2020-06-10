<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return new Response('
            <HTML>
                <BODY>
                    <IMG SRC="/images/under-construction.gif" />
                </BODY>
            </HTML>
            ');
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request)
    {
        $greet = '';

        if($name = $request->query->get('hello')){
            $greet = sprintf('<H1>Hello %s ! </H1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
            <HTML>
                <BODY>
                    $greet
                    <IMG SRC="/images/under-construction.gif" />
                </BODY>
            </HTML>
            EOF);
    }
}

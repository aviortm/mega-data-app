<?php

namespace App\Controller;

use MegaDataBundle\Interaction\Protocol;
use MegaDataBundle\Operation\Locations\Get\Dto\Request\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        $protocol = $this->container->get('mega_data.protocol');
        /** @var Protocol $protocol */

        var_dump($protocol->locations(new Request()));

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: merkulova
 * Date: 03.02.2019
 * Time: 1:14
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentsController extends AbstractController
{
    /**
     * @Route("/documents/download")
     * @return Response
     */
    public function download()
    {
        return $this->json(['document' => ['docId' => 1, 'orderId' => 789]]);
    }
}
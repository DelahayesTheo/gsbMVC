<?php

namespace FraisApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PdoGsb;

class EtatRestController extends Controller
{
    /**
     * @ApiDoc(
      * resource=true, 
      * description="Update l'état d'une fiche frais"
      * )
     */
    public function putEtatidfichefraisAction(Request $request) 
    {
        $pdo = PdoGsb::getPdoGsb();
        $idVisiteur = $request->request->get('idVisiteur');
        $mois = $request->request->get('mois');
        $etat = $request->request->get('etat');
        $pdo->majEtatFicheFrais($idVisiteur, $mois, $etat);
        
        $response = new Response();
        $statusCode = 200;
        $response->setStatusCode($statusCode);
        return $response;
    }
}

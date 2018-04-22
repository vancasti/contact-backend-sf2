<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Rest controller for communication app
 *
 * @package AppBundle\Controller
 * @author Victor Castiñeira <vancasti86@gmail.com>
 */
class ContactController extends FOSRestController
{
    static $logdir = '/../web/files/';

    /**
     * List all contacts
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     * @Annotations\View()
     * @param int $phone the phone id
     * @return array
     */
    public function getContactsAction($phone)
    {
        $logManager = $this->get('app.log_manager');
        $basepath = $this->get('kernel')->getRootDir() . self::$logdir;
        $logManager->processFile($basepath, $phone);
        $data = ['contacts' => $logManager->getContacts()];
        return $this->responseJson($data);
    }

    /**
     * List communications.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     * @Annotations\View()
     * @param int $phone the phone id
     * @return array
     */
    public function getCommunicationsAction($phone)
    {
        $logManager = $this->get('app.log_manager');
        $basepath = $this->get('kernel')->getRootDir() . self::$logdir;
        $logManager->processFile($basepath, $phone);
        $logManager->getContacts();
        $data = ['communications' => $logManager->getCommunications()];
        return $this->responseJson($data);
    }

    /**
     * Generates JSON response
     * @var array $data
     */
    public function responseJson($data)
    {
      $response = new Response();
      $response->setContent(json_encode($data));
      $response->headers->set('Content-Type', 'application/json');
      $response->headers->set('Access-Control-Allow-Origin', '*');
      return $response;
    }
}

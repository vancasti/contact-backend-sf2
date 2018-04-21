<?php

namespace AppBundle\Controller;

use AppBundle\Form\NoteType;
use AppBundle\Manager\ReadLogManager;
use AppBundle\Manager\ObjectParser;
use AppBundle\Model\Note;
use AppBundle\Model\NoteCollection;

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
 * Rest controller for notes
 *
 * @package AppBundle\Controller
 * @author Victor Castiñeira <vancasti86@gmail.com>
 */
class ContactController extends FOSRestController
{
    /**
     * return \AppBundle\NoteManager
     */
    public function getNoteManager()
    {
        return $this->get('app.note_manager');
    }

    /**
     * List all contacts & communications.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     *
     * @Annotations\View()
     *
     * @param int $phone the phone id
     *
     * @return array
     */
    public function getContactsAction($phone)
    {
        $logManager = new ReadLogManager();
        $parser = new ObjectParser();

        if ($logManager->checkIfLogExists($phone)) {
          $logManager->processFile();
          $contacts = $logManager->getContacts();
          $communications = $logManager->getCommunications();

          $response = new Response();
          $response->setContent(json_encode([
              'contacts' => $contacts,
              'communications' => $communications
          ]));
          $response->headers->set('Content-Type', 'application/json');
          return $response;
        }
    }
}

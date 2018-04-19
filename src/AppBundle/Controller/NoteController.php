<?php

namespace AppBundle\Controller;

use AppBundle\Form\NoteType;
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
 * @author Gordon Franke <info@nevalon.de>
 */
class NoteController extends FOSRestController
{
    /**
     * return \AppBundle\NoteManager
     */
    public function getNoteManager()
    {
        return $this->get('app.note_manager');
    }

    /**
     * List all notes.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing notes.")
     * @Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many notes to return.")
     *
     * @Annotations\View()
     *
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getNotesAction(ParamFetcherInterface $paramFetcher)
    {
        // $offset = $paramFetcher->get('offset');
        // $start = null == $offset ? 0 : $offset + 1;
        // $limit = $paramFetcher->get('limit');
        // $notes = $this->getNoteManager()->fetch($start, $limit);
        // return new NoteCollection($notes, $offset, $limit);
        return new Response('SUCCESS');
    }
}

<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    public function ShowAction($id)
    {
	$entity = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->find($id);
	//return new Response($entity->getAttributes()->first()->getValue());
	if($entity)
		//return new Response($entity->getEntityType()->getEntityTypeName());
		//return new Response($entity->getAttributes()->first()->getValue());
		//return new Response($entity->getTv()->getTvName());
		//return new Response($entity->getTvName());
		//return new Response($entity->getEntity()->getEntityId());
		//return new Response($entity->getEntityTypes()->first()->getEntityTypeName());
		//return new Response($entity->getValues()->first()->getValue());
		return new Response($entity->getEntities()->first()->getEntityId());
	else return new Response("empty");
    }
}

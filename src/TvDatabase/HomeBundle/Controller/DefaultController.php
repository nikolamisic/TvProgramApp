<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
	//$today = date_create(date('Y-m-s H:i:s'));
	
	$today = date_create('2013-01-11 11:45:00');
	$results = array();
	
	$displays = array('RTS1','Prva TV');
	foreach($displays as $display)
	{
		$em = $this->getDoctrine()->GetManager();
		$tv =	$em->getRepository('AcmeStoreBundle:TVStation')->findOneBy(array('TvName' => $display));
		$query = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime <= :stampmax ORDER BY e.Datetime DESC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s')
							/*'stampmin' => date_sub($today,date_interval_create_from_date_string('1 day'))*/
							));
		$query->setMaxResults(1);
		$shows = $query->getResult();
		$name = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->
						findOneBy(array('entity' => $shows[0]->getEntityId(), 'AttributeId' => 7));
		$resName = '';
		if($name)
			$resName = $name->getValue();
		else
			$resName = 'Name not in database';
		//sledeca
			$queryNext = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime >= :stampmax ORDER BY e.Datetime ASC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s')
							//'stampmin' => date_add($today,date_interval_create_from_date_string('1 day'))
							));
		$queryNext->setMaxResults(1);
		$showsNext = $queryNext->getResult();
		$nameNext = $this->getDoctrine()->getRepository('AcmeStoreBundle:EAVAttributeValue')->
						findOneBy(array('entity' => $showsNext[0]->getEntityId(), 'AttributeId' => 7));
		$nNext = '';
		if($nameNext)
			$nNext=$nameNext->getValue();
		else
			$nNext = 'Name not in database';
		//$shows = $em->getRepository('AcmeStoreBundle:EAVEntity')->findBy(array('TvStation' => $tv->GetTvId()));
		array_push($results,array(
				'tv'=> $tv,
				'shows'=> $shows[0]->getDatetime()->format('H:i'),
				'name'=> $resName,
				'nameId' => $shows[0]->getEntityId(),
				'showsNext'=> $showsNext[0]->getDatetime()->format('H:i'),
				'nameNext' => $nNext,
				'nameNextId' => $showsNext[0]->getEntityId()
				));
	}
	
        return $this->render('TvDatabaseHomeBundle:Default:index.html.twig',array( 'results' => $results));
    }
    public function tvStationsAction()
    {

	$tvStation = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
	$nameArray = array();
	foreach($tvStation as $tv)
	{
		array_push($nameArray, $tv->getTvName());
	}
	return $this->render('TvDatabaseHomeBundle:Default:stations.html.twig', array( 'names' => $nameArray) );
    }
    public function advancedSearchAction()
    {
	$tvTypes = $this->getDoctrine()->getRepository('AcmeStoreBundle:MetaEAVEntityType')->findAll();
	$typeNameArray = array();
	foreach($tvTypes as $type)
	{
		array_push($typeNameArray, $type->getEntityTypeName());
	}
	$televisions = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
	$tvNameArray = array();
	foreach($televisions as $television)
	{
		array_push($tvNameArray, $television->getTvName());
	}
	return $this->render('TvDatabaseHomeBundle:Default:advsearchform.html.twig', array(
		'types' => $typeNameArray,
		'televisions' => $tvNameArray
		));
    }
    public function advancedSearchResponseAction(Request $request)
    {
	return $this->render('TvDatabaseHomeBundle:Default:advsearchresponse.html.twig');
    }

    public function showAction($id)
    {
	$em = $this->getDoctrine()->GetManager();
	$show = $em->getRepository('AcmeStoreBundle:EAVEntity')->find($id);
	$result = array();
	foreach($show->getAttributes() as $attribute)
	{
		$name = $em->getRepository('AcmeStoreBundle:MetaEAVAttribute')->find($attribute->getAttributeId());
		array_push($result, array('name' => $name->getAttributeName(),'value' => $attribute->getValue()));
	}
	return $this->render('TvDatabaseHomeBundle:Default:show.html.twig', array('attributes' => $result));
	
    }

    public function showTVAction($id, $date)
    {
	if($date === 'today')
		$today = date_create('2013-01-11 11:45:00');
	else
		$today = date_create($date . '12:00:00');
	$em = $this->getDoctrine()->getManager();
	$tv = $em->getRepository('AcmeStoreBundle:TVStation')->find($id);
	$query = $em->createQuery('SELECT ent from AcmeStoreBundle:EAVEntity as ent 
				WHERE ent.Datetime < :preDate AND ent.Datetime > :postDate 
				AND ent.TvStation = :tv ORDER BY ent.Datetime ASC')
				->setParameters(array(
						'postDate' => $today->format('Y-m-d') . ' 00:00:00',
						'preDate' => $today->format('Y-m-d') . ' 24:00:00',
						'tv' => $tv->getTvId()));
	$results = array();
	foreach($query->getResult() as $result)
	{
		$nameId = $em->getRepository('AcmeStoreBundle:MetaEAVAttribute')
						->findOneBy(array('AttributeName' => 'Name'));
		$name = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')
						->findOneBy(array('AttributeId' => $nameId->getAttributeId(),
								'entity' => $result->getEntityId()));
		$resName = '';
		if($name)
			$resName = $name->getValue();
		else
			$resName = 'Name not in database';
		array_push($results,array('time' => $result->getDatetime()->format('H:i'),
					'name' => $resName,
					'id' => $result->getEntityId()));
	}
	return $this->render('TvDatabaseHomeBundle:Default:showTV.html.twig',
				array('results' => $results,'tv' => $tv->getTvName()));
    }
}









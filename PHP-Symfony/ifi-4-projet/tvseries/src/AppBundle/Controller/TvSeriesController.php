<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TvSeries;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TvSeriesController extends Controller
{
    /**
     * @Route("/series/create")
     */
    public function createSeriesAction(Request $request) {
        $s  = new TvSeries();
        $s->setAuthor($request->get('author'));
        $s->setName($request->get('name'));
        $s->setDescription($request->get('description'));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        return new Response('ok');
    }

	/**
     * @Route("/", name="homepage")
     */
	public function listAction() {


		/*Test de création d'entités en mémoire*/
		/*$s1 = new TvSeries();
		$s1->setId('fa512e84-797c-4513-ab9b-da096b641f81');
		$s1->setAuthor('Author 1');
		$s1->setName('Title 1');

		$s2 = new TvSeries();
		$s2->setId('2627c2a5-5c50-40da-815e-832e0564e4ec');
		$s2->setAuthor('Author 2');
		$s2->setName('Title 2');

		$series = [
			$s1, $s2
		];*/

		$manager = $this->get('doctrine')->getManager();
        $series = $manager->getRepository(TvSeries::class)->findAll();

		return $this->render('tvseries/index.html.twig',['series' => $series]);
	}
}
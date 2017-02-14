<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TvSeries;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TvSeriesController extends Controller
{
    /**
     * @Route("/series/create")
     * @param Request $request
     * @return Response
     */
    public function createSeriesAction(Request $request) {
        $s = new TvSeries();
       // $s->setAuthor($request->get('author'));
       // $s->setName($request->get('name'));
       // $s->setDescription($request->get('description'));

        $formSeries = $this->createFormBuilder($s)
            ->add('name', TextType::class)
            ->add('author', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Series'))
            ->getForm();

        $formSeries->handleRequest($request);
        
        if ($formSeries->isSubmitted() && $formSeries->isValid()) {

            $s = $formSeries->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($s);
            $manager->flush();

            return new Response('ok');
        }
        return $this->render('tvseries/index.html.twig', array(
            'form' => $formSeries->createView(),
        ));
    }

    /**
     * @Route("/series/remove")
     * @param Request $request
     * @return Response
     */
    public function removeSeriesAction(Request $request)
    {
        //series/remove/series_name=...
        $manager = $this->getDoctrine()->getManager();
        $seriesName = $request->get('series_name');
        $name = $manager->getRepository(TvSeries::class)->findOneBy(['name' => $seriesName]);
        
        $manager->remove($name);
        $manager->flush();
        return new Response('ok');
    }

	/**
     * @Route("/", name="homepage")
     */
	public function listAction() {

		$manager = $this->getDoctrine()->getManager();
        $series = $manager->getRepository(TvSeries::class)->findAll();

		return $this->render('tvseries/index.html.twig',['series' => $series]);
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05/02/2017
 * Time: 11:00
 */

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Episode;
use AppBundle\Entity\TvSeries;
use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type;

class EpisodeController extends Controller
{
    /**
     * @Route("/episodes/create")
     * @param Request $request
     * @return Response
     */
    public function createEpisodeAction(Request $request)
    {
        //Create new episode
        $e = new Episode();
        $e->setEpisodeNumber($request->get('episodeNumber'));
        $e->setName($request->get('name'));
        $e->setDescription($request->get('description'));

        $form = $this->createFormBuilder($e)
            ->add('name', TextType::class)
            ->add('episodeNumber', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $e = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($e);
            $em->flush();

            return new Response('ok');
        }
        return $this->render('episodes/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
        /**
         * @Route("/", name="homepage")
         */
        public function listAction()
        {
            $manager = $this->getDoctrine()->getManager();
            $episodes = $manager->getRepository(Episode::class)->findAll();

            return $this->render('episodes/index.html.twig', ['episodes' => $episodes]);
        }
    }

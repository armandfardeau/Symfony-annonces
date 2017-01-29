<?php



namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Armand'));

        return new Response($content);
    }

    public function byebyeworldAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:byebyeworld.html.twig', array('nom' => 'Armand'));

        return new Response($content);
    }
}
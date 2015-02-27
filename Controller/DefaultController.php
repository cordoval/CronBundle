<?php

namespace ColourStream\Bundle\CronBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route(name="cron")
     */
    public function indexAction()
    {
        $cronJobs = $this->getDoctrine()->getManager()->getRepository('ColourStreamCronBundle:CronJob')->findAll();
        $parameters = [
            'cronJobs' => $cronJobs,
        ];

        return $this->render('ColourStreamCronBundle:default:index.html.twig', $parameters);
    }
}

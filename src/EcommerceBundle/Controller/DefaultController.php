<?php

namespace EcommerceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @package EcommerceBundle\Controller
 */

/**
 * @Route("/users")
 */

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }

    /**
     * @Route("/test")
     * @Method("GET")
     */
    public function testAction()
    {
        return $this->render('EcommerceBundle:Default:test.html.twig');
    }
}

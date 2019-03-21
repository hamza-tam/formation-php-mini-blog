<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{
    /**
     * @Route("/post/{add}", name="add_post")
     */
    public function postAction($add)
    {
    	$test = "hello";

        return $this->render('myviews/post.html.twig',[
        	'greeting' => $add,
        	'test'     => false,
        	'link'     => $this->generateUrl('other_post')
        ]);
    }

    /**
     * @Route("/post/other", name="other_post")
     */
    public function otherAction() {
    	return new Response('test');
    }
}

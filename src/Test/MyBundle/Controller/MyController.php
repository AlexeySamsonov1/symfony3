<?php


namespace Test\MyBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller
{
	public function indexAction(Request $request)
	{
		// replace this example code with whatever you need
		//return Response::create('f');
		return $this->render('TestMyBundle::index.html.twig', [
		  'name' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		]);
	}
}

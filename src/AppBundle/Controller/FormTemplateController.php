<?php
namespace AppBundle\Controller;

use AppBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use AppBundle\Entity\Post;
use Symfony\Component\Form\FormBuilderInterface;

class FormTemplateController extends Controller
{
	public function newAction(Request $request)
	{
		// build the form
		$post = new Post();
		$form = $this->createForm(new PostType(), $post);
		
		// listener
		$form->handleRequest($request);
		
		//submit
		if ($form->isSubmitted() && $form->isValid())
		{
				$em = $this->getDoctrine()->getManager();
				// tells Doctrine you want to (eventually) save the Post (no queries yet)
				$em->persist($post);
				// actually executes the queries (i.e. the INSERT query)
				$em->flush();
				
				return $this->redirect($this->generateUrl('admin_post_show', array($post)));
		}
		//$form->getData();
		//$string = $form->getErrors();
		//var_dump($string);
		
		//render template
		return $this->render('form/formTemplate.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	
	
	
	
	public function showAction(Request $request)
    {
		echo "MOSTRANDO: ";
		//$idactual = $request->query->getId();
		//$postId = $request->query->get('id',1); //query->all()
		
		$post = $this->getDoctrine()
			->getRepository('AppBundle:Post')
			->findOneBy(array(),array("id"=>'desc')); //en el primer array se filtra por el usuario

		if (!$post) {
			throw $this->createNotFoundException('No post found for id '.$post->getId());
		}
		
		
		$form2 = $this->createFormBuilder($post)
            ->add('edit', 'submit')
            ->getForm();
			
		$form2->handleRequest($request);
		
		if ($form2->isSubmitted() && $form2->isValid())
		{
			$data = $request->query->all();
			$url = $this->generateUrl('admin_post_editar', $data);
			return $this->redirect($url);
		}
		
		return $this->render('form/formTemplate_result_forEdit.html.twig', array(
				'id' => $post->getId(),
				'title' => $post->getTitle(),
				'summary' => $post->getSummary(),
				'content' => $post->getContent(),
				'authorEmail' => $post->getAuthorEmail(),
				'publishedAt' => $post->getPublishedAt(),
				'form' => $form2->createView(),
			));
	}
	
	
	
	
	
	
	
	
	public function editarAction(Request $request)
	{
		echo "EDITANDO: ";
		
		//$postId = $request->query->get('id', 1); //query->all()
		//$postId = $request->query->get('id');
		$post = $this->getDoctrine()
			->getRepository('AppBundle:Post')
			->findOneBy(array(),array("id"=>'desc'));
			//->find($postId);
			
		if (!$post) {
			throw $this->createNotFoundException('No post found for id '.$post->getId());
		}
		
		//-> add('id', 'text', array('auto_initialize' => $post->getId(), 'disabled' => true))
		$form2 = $this->createFormBuilder($post)
			-> add('title', 'text', array('auto_initialize' => $post->getTitle()))
			-> add('summary', 'text', array('auto_initialize' => $post->getSummary()))
			-> add('content', 'text', array('auto_initialize' => $post->getContent()))
			-> add('authorEmail', 'text', array('auto_initialize' => $post->getAuthorEmail()))
			-> add('publishedAt', 'datetime', array('validation_groups' => $post->getPublishedAt()))
            -> add('update', 'submit')
            -> getForm();
		
		$form2->handleRequest($request);
		
		if ($form2->isSubmitted() && $form2->isValid())
		{
				$em = $this->getDoctrine()->getManager();
				// tells Doctrine you want to (eventually) save the Post (no queries yet)
				$em->persist($post);
				// actually executes the queries (i.e. the INSERT query)
				$em->flush();
				
				//return $this->redirect($this->generateUrl('admin_post_update', array($post)));
		
			$data = $request->query->all();
			$url = $this->generateUrl('admin_post_update', $data);
			return $this->redirect($url);
			
		}
		
		return $this->render('form/formTemplate_result_Final.html.twig', array(
			'form' => $form2->createView(),
		));
	}
	
	
	
	
	public function updateAction(Request $request)
	{
		echo "ACTUALIZANDO: ";
		
		$em = $this->getDoctrine()->getManager();
		
		$post = $em->getRepository('AppBundle:Post')->findOneBy(array(),array("id"=>'desc'));

		if (!$post) {
			throw $this->createNotFoundException(
				'No post found for id '.$post->getId()
			);
		}

		//$post->setName('New post name!');
		$em->flush();

		return $this->redirect($this->generateUrl('admin_post_show'));
	}
}
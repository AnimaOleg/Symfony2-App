<?php
namespace AppBundle\Controller;

//require_once lib/swift_required.php;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class EmailController extends Controller
{
	public function indexAction(Request $request)
	{
		/*
		// Create the message
		$message = Swift_Message::newInstance()
		// Give the message a subject
		->setSubject('Your subject')
		// Set the From address with an associative array
		->setFrom(array('john@doe.com' => 'John Doe'))
		// Set the To addresses with an associative array
		->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
		// Give it a body
		->setBody('Here is the message itself')
		// And optionally an alternative body
		->addPart('<q>Here is the message itself</q>', 'text/html')
		// Optionally add any attachments
		->attach(Swift_Attachment::fromPath('my-document.pdf'))
		;
		*/
		
		$defaultData = array('message' => 'Type your message here');
		
		$form = $this->createFormBuilder($defaultData)
            -> add('send email', 'submit')
            -> getForm();
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid())
		{
			//$data = $form->getData();
			$data = $request->query->all();
			$url = $this->generateUrl('email_post_send', $data);
			return $this->redirect($url);
		}
		
		return $this->render('Email/emailTemplate.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function sendAction(Request $request)
	{
		$form = $this->createFormBuilder()
            -> add('atras', 'submit')
            -> getForm();
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid())
		{
			//$data = $form->getData();
			$data = $request->query->all();
			$url = $this->generateUrl('email_post_index', $data);
			return $this->redirect($url);
		}
		
		$name = "oleggg";
		$subject = 'Hello Email';
		$sendFrom = 'oleg.tortajada2@gmail.com';
		$sendTo = 'oleg.tortajada@gmail.com';
		$body = $this->renderView('Email/emailTemplateRegistration.html.twig', array('name' => $name));
		
		/*
		$transport = \Swift_SmtpTransport::newInstance('smtp.live.com', 587, 'tls')
		->setUsername('correo@hotmail.com')
		->setPassword('pass');
		$mailer = \Swift_Mailer::newInstance($transport);
		*/
		
		$message = \Swift_Message::newInstance()
		->setSubject($subject)
		->setFrom($sendFrom)
		->setTo($sendTo)
		->setBody($body,'text/html');

		//$mailer->send($message);
		$this->get('mailer')->send($message);
		
		return $this->render('Email/emailTemplate.html.twig', array(
			'message' => $message,
			'form' => $form->createView(),
		));
	}
}
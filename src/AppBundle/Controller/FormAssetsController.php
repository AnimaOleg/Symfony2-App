<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\TaskAssets;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use \DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
 
class FormAssetsController extends Controller
{
	
    /**
	* 1
	* @Route("/formAssets")
	*/
    public function newAction(Request $request)
    {
        // crea una task y le asigna algunos datos ficticios para este ejemplo
        $task = new TaskAssets();
 
        $form = $this->createFormBuilder($task)
            ->add('firstname', 'text')
            ->add('dni', 'text')
            ->add('age', 'text')
            ->add('email', 'text')
			->add('checkbox', 'checkbox', array(
				'label'    => 'Show this entry publicly?',
				'required' => false,
			))
            ->add('save', 'submit')
			->add('saveAndAdd', 'submit')
            ->getForm();
			
			
		$form->handleRequest($request);
		
		if ($form->isValid())
		{
			//datos del formulario
			$datos = $form->getData();
			
			//operar los datos, como guardarlos en la base de datos
			$nextAction = $form->get('saveAndAdd')->isClicked()
				? 'task_new2'
				: 'task_success2';
				
				
			//guardar la tarea en la base de datos
			return $this->redirect($this->generateUrl('task_success2', array(
				'firstname' => $datos->getFirstName(),
				'dni' => $datos->getDni(),
				'age' => $datos->getAge(),
				'email' => $datos->getEmail(),
				'checkbox' => $datos->getCheckBox(),
			)));
		}
		
		//comprobar si el formulario se ha enviado         if $form->isSubmited(){ }
		
        return $this->render('form/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

	
	/**
	* @Route("/formAssets/success", name="task_success2")
	*/
    public function taskSuccess2(Request $request)
    {	
		$data = $request->query->all();
		
		return $this->render('form/formView.html.twig', $data);
	}
	
	/**
    * @Route("/formAssets/new", name="task_new2")
    */
    public function taskNew2(Request $request)
    {
		$data = $request->query->all();
		
		return $this->render('form/formView.html.twig', $data);
	}
	
	
}
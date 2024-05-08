<?php
// src/Acme/TaskBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
 
class FormController extends Controller
{
    /**
	* 1
	* @Route("/formC")
	*/
    public function newAction(Request $request)
    {
        // crea una task y le asigna algunos datos ficticios para este ejemplo
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
		
		//crea form
        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
			->add('saveAndAdd', 'submit')
            ->getForm();
			
		// listener
		$form->handleRequest($request);
		
		if ($form->isValid())
		{
			//datos del formulario
			$datos = $form->getData();
			
			// ... haz algo con los datos, como por ejemplo guardarlos en la base de datos ...
			$nextAction = $form->get('saveAndAdd')->isClicked()
				? 'task_new'
				: 'task_success';
				
			//guardar la tarea en la base de datos
			return $this->redirect($this->generateUrl('task_success', array(
				'task' => $datos->getTask(),
				'fecha' => $datos->getDueDate()
			)));
		}
		
		//comprobar si el formulario se ha enviado       if $form->isSubmited(){ }
		
        return $this->render('form/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	
	/**
     * @Route("/formC/new", name="task_new")
     */
    public function taskNew(Request $request)
    {
		$data = $request->query->all();
		return $this->render('form/new2.html.twig', $data);
	}
	
	/**
	* @Route("/formC/success", name="task_success")
	*/
    public function taskSuccess(Request $request)
    {
		$data = $request->query->all();
		return $this->render('form/new2.html.twig', $data);
	}
}
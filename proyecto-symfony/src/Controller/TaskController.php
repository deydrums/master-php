<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Task;
use App\Entity\User;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function index(): Response
    {
        //Prueba de entidades y relaciones
        $em = $this->getDoctrine()->getManager();
        $task_repo = $this->getDoctrine()->getRepository(Task::class);
        $tasks = $task_repo->findBy([],['id' => 'DESC']);



        /*
        $user_repo = $this->getDoctrine()->getRepository(User::class);
        $users = $user_repo->findAll();
        foreach($users as $user){
            echo '<h1>'.$user->getName().' '.$user->getSurname().'</h1><br>';

            foreach($user->getTasks() as $task){
                echo $task->getTitle().'<br>';
            }
        }
         */
        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
       
    }

    public function detail(Task $task){
        if(!$task){
            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/detail.html.twig', array(
            'task' => $task
        ));
    }

    public function creation(Request $request){
        return $this->render('task/creation.html.twig', array(

        ));
    }
}

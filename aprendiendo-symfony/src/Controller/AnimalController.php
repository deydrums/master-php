<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function index(): Response
    {
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        $animales = $animal_repo->findAll();

        $animal = $animal_repo->findBy([
            'raza' => 'Africana'
        ],[
            'id' => 'DESC'
        ]);

        var_dump($animal);
        die();

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales,
        ]);
    }

    public function save(){
        //Guardar en una tabla de la base de datos 

        //Cargar el em
        $entityManager = $this->getDoctrine()->getManager();
        //Crear objeto y dar valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('Verde');
        $animal->setRaza('Africana');
        //Guardar objeto en doctrine 
        $entityManager->persist($animal);
        //Volcar datos en la tabla / guardar
        $entityManager->flush();
        return new Response('El animal guardado tiene el id: '.$animal->getId());
    }

    public function animal(Animal $animal) {
        /*
        //Cargar repositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        //Consulta

        $animal = $animal_repo->find($id);
        */

        //Comprobar si el resultado es correcto
        if(!$animal){
            $message = 'El animal no existe';
        }else{
            $message = 'Tu animal elegido es: '.$animal->getTipo().' - '.$animal->getRaza();
        }
        return new Response($message);
    }

    public function update($id){
        //Cargar doctrine
        $doctrine = $this->getDoctrine();
        //Cargar entityManager
        $em = $doctrine->getManager();
        //Cargar repo Animal
        $animal_repo = $em->getRepository(Animal::class);
        //Find
        $animal = $animal_repo->find($id);
        //Comprobar  si el objeto me llega
        if (!$animal) {
            $message = 'El animal no existe en la bbdd';
        }else{        
        //Asignarle los valores al objeto
            $animal->setTipo("Perro $id");
            $animal->setColor('Rojo');
        //Persistir en doctrine 
            $em->persist($animal);
        //Guardar en la base de datos
            $em->flush();
            $message = 'Has actualizado el animal '.$animal->getId();
        }

        //Respuesta
        return new Response($message);
    }

}

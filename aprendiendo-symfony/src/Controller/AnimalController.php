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


}

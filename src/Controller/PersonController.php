<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/person")
 */
class PersonController extends AbstractController
{
    /**
     * @Route("/{id}/view", name="person_view", requirements={"id" = "\d+"}, methods={"GET"})
     */
    public function viewCategory(Person $person)
    {
        return $this->render('person/view.html.twig', [
            'person' => $person,
        ]);
    }

}

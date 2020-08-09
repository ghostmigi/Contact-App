<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\SearchContactType;
use App\Repository\ContactRepository;
use phpDocumentor\Reflection\Types\This;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

///**
// * @Route("/contact")
// */
class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact_index", methods={"GET", "POST"})
     * @Security("is_granted('ROLE_USER')")
     */
    public function index(ContactRepository $contactRepository, Request $request): Response
    {
        $searchForm = $this->createForm(SearchContactType::class);
        $searchForm->handleRequest($request);
        $result = $contactRepository->findAll();

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $qq = $request->request->get('search_contact')['searchFields'];
            $result = $contactRepository->findByFistNameOrLastName($qq);
        }

        return $this->render('contact/index.html.twig', [
            'contacts' => $result,
            'searchForm' => $searchForm->createView()
        ]);
    }

    /**
     * @Route("/new", name="contact_new", methods={"GET","POST"})
     * @IsGranted("ROLE_USER")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('contact_index');
        }

        return $this->render('contact/new.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contact_show", methods={"GET"})
     * @IsGranted("ROLE_USER")
     */
    public function show(Contact $contact): Response
    {
        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contact_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_USER")
     */
    public function edit(Request $request, Contact $contact): Response
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contact_index');
        }

        return $this->render('contact/edit.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contact_delete", methods={"DELETE"})
     * @IsGranted("ROLE_USER")
     */
    public function delete(Request $request, Contact $contact): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contact);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contact_index');
    }
}

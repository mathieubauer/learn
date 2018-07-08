<?php

namespace dsw\UserBundle\Controller;

// use dsw\AmpliBundle\Entity\Idee;
// use dsw\AmpliBundle\Entity\Espace;
// use dsw\AmpliBundle\Form\IdeeType;
// use dsw\AmpliBundle\Form\IdeeEditType;

use dsw\UserBundle\Entity\User;
use dsw\UserBundle\Form\Type\EmailFormType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserController extends Controller
{
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('dswUserBundle:User')->findAll();
        return $this->render('dswUserBundle:User:index.html.twig', array(
            'users' => $users,
        ));
        
    }
    
    public function viewAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // on récupère l'user
        $user = $em->getRepository('dswUserBundle:User')->find($id);
        
        $idees = $em->getRepository('dswAmpliBundle:Idee')->findBy(
            array(
                'user' => $user,
            )
        );
        
        $likes = $em->getRepository('dswAmpliBundle:Coeur')->findBy(
            array(
                'user' => $user,
            )
        );
        
        if (null === $user) {
            throw new NotFoundHttpException("L'utilisateur " . $id . " n'existe pas.");
        }
        
        return $this->render('dswUserBundle:User:view.html.twig', array(
            'user' => $user,
            'idees' => $idees,
            'likes' => $likes,
        ));
        
    }
    

    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function editAction($id, Request $request)
    {
        
        
    }
    
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('dswUserBundle:User')->find($id);
        
        if (null === $user) {
            throw new NotFoundHttpException("L'utilisateur d'id " . $id . " n'existe pas.");
        }
        
        $idees = $em->getRepository('dswAmpliBundle:Idee')->findBy(
            array(
                'user' => $user,
            )
        );
        
        $likes = $em->getRepository('dswAmpliBundle:Coeur')->findBy(
            array(
                'user' => $user,
            )
        );
        
        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        // $form = $this->createForm() ne fonctionne pas sans arguments
        $form = $this->get('form.factory')->create();
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
            $em->remove($user);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('info', "L'utilisateur a bien été supprimé.");
            return $this->redirectToRoute('dsw_ampli_admin_user');
            
        }
        
        return $this->render('dswUserBundle:User:delete.html.twig', array(
            'user' => $user,
            'idees' => $idees,
            'likes' => $likes,
            'form'   => $form->createView(),
        ));
        
    }
    
    public function emailAction(Request $request)
    {
        
        // $defaultData = array('message' => 'Type your message here');
        // $form = $this->createFormBuilder($defaultData)
        
        $form = $this->createFormBuilder()
            // ->add('name', TextType::class)
            // ->add('email', EmailType::class)
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'Email professionnel',
                    'class' => 'text-center',
                )
            ))
            // ->add('message', TextareaType::class)
            // ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $email = $data['email'];
            
            // Vérifie si l'utilisateur existe
            
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('dswUserBundle:User')->findOneBy(
                array(
                    'email' => $email,
                )
            );
            
            if ($user) {
                
                // l'adresse existe
                // return $this->redirectToRoute('fos_user_security_login');
                return $this->redirectToRoute('fos_user_security_login', array('email' => $email));
                
            } else {
                
                // l'adresse n'existe pas
                return $this->redirectToRoute('fos_user_registration_register', array('email' => $email));
                
            }  
            
        }
        
        return $this->render('dswUserBundle:Security:email.html.twig', array(
            'form' => $form->createView(),
        ));
        

        
        
        
        
        
        
        /** @var $session Session 
        $session = $request->getSession();

        $authErrorKey = Security::AUTHENTICATION_ERROR;
        $lastUsernameKey = Security::LAST_USERNAME;

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        $csrfToken = $this->has('security.csrf.token_manager')
            ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
            : null;
        
        return $this->render('dswUserBundle:Security:email.html.twig', array(
            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
        
        return $this->render('dswUserBundle:Security:email.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
        
        // AJOUTER UN LISTENER DE L'ERREUR QUI SERA PROVOQUEE ICI
        
        */
    }

}

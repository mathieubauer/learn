<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dsw\UserBundle\Controller;

use dsw\UserBundle\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

class SecurityController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function loginAction(Request $request)
    {
        /** @var $session Session */
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

        return $this->renderLogin(array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
    }
    
    
    public function loginLearnAction(Request $request)
    //public function loginLearnAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        
        // IMPORTANT
        // Permet de se logger sans mot de passe !
        // Ou de se s'enregistrer !
        
        $em = $this->getDoctrine()->getManager();
        
        $redirectUrl = $request->getSession()->get('_security.learn.target_path');
        
        $split = explode('/learn/course/', $redirectUrl);
        
        if (isset($split[1])) { 
            
            $courseId = $split[1];
        
            $course = $em->getRepository('dswLearnBundle:Course')->findOneById($courseId);
            
            if ($course) {
                
                if ($course->getCode() ==  'es') {

                    $image_login = '/bundles/dswlearn/img/logoes.png';

                } else {

                    $image_login = null;

                }
                
            } else {
                
                $image_login = null;
                
            }
            
        } else {
            
            $image_login = null;
            
        }
        
        
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('dsw_learn_homepage');
        }
        
        $form = $this->createFormBuilder()
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'Votre email professionnel',
                    'class' => 'text-center',
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $email = $data['email'];
            
            $user = $em->getRepository('dswUserBundle:User')->findOneBy(array(
                'email' => $email,
            ));
            
            if (!$user) {
                
                $user = new User();
                
                $passwordEncoder = $this->get('security.password_encoder');
                
                $password = $passwordEncoder->encodePassword($user, 'azerty');
                $user->setPassword($password);
                $user->setUsername($email);
                $user->setEmail($email);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                
                // return new RedirectResponse($redirectUrl); 
                
                
                /*
                
                $error = "Cette adresse n'a pas été reconnue.";
                
                return $this->render('dswUserBundle:Security:login_learn.html.twig', array(
                    'manual_error'  => $error,
                    'form'          => $form->createView(),
                ));
                
                */
                
            }
            
            // Handle getting or creating the user entity likely with a posted form
            // The third parameter can change according to the name of your firewall in security.yml
            $token = new UsernamePasswordToken($user, null, 'learn', $user->getRoles());
            $this->get('security.token_storage')->setToken($token);

            // If the firewall name is not main, then the set value would be instead:
            // $this->get('session')->set('_security_XXXFIREWALLNAMEXXX', serialize($token));
            $this->get('session')->set('_security_learn', serialize($token));

            // Fire the login event manually
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
            
            if ($redirectUrl) {
                // return $this->redirectToRoute($redirectUrl);
                return new RedirectResponse($redirectUrl); 
            }
            
        }
        
        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');
        
        return $this->render('dswUserBundle:Security:login_learn.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'image'         => $image_login,
            'error'         => $authenticationUtils->getLastAuthenticationError(),
            'form'          => $form->createView(),
        ));
        
    }
    
    public function loginLearnAdminAction(Request $request)
    {
        
        // Si le visiteur est déjà identifié
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('dsw_learn_landing');
        }

        // Le service authentication_utils
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('dswUserBundle:Security:login_learn_admin.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
        
    }
    
    public function loginFullAction(Request $request)
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('dsw_learn_landing');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('dswUserBundle:Security:login_learn.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
    
    
    public function loginAdminAction(Request $request)
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('dsw_ampli');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('dswUserBundle:Security:login_admin.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
    
    
    

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return Response
     */
    protected function renderLogin(array $data)
    {
        // Formulaire avec juste "Créer un compte" (image Quiz)
        // return $this->render('@dswUser/Security/toRegister.html.twig', $data);
        
        // Formulaire avec Identifiant (sans mot de passe) seul (image Ampli micro)
        // return $this->render('@dswUser/Security/username.html.twig', $data);
        
        // Formulaire avec Identifiant (sans mot de passe ) + "Créer un compte" (image Ampli montagnes)
        // return $this->render('@dswUser/Security/usernameCreate.html.twig', $data);
        
        // Formulaire écrasé par la vue dans dswUserBundle : login, mot de passe et création (image Ampli micro)
        return $this->render('@FOSUser/Security/login.html.twig', $data);
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
    
}

<?php

namespace dsw\AmpliBundle\Controller;

use dsw\AmpliBundle\Entity\Idee;
use dsw\AmpliBundle\Entity\Espace;
use dsw\AmpliBundle\Entity\Coeur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class CoeurController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function toggleAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        $user = $this->getUser();
        
        $match = $em->getRepository('dswAmpliBundle:Coeur')->match($user, $idee); // retourne Coeur ou null
        
        $count = $em->getRepository('dswAmpliBundle:Coeur')->countCoeurs($idee);
        
        if ($match) {
            
            $em->remove($match);
            
            $data = $count - 1;
            
        } else {
            
            $coeur = new Coeur();
            $coeur->setUser($user);
            $coeur->setIdee($idee);
            $em->persist($coeur);
            
            $data = $count + 1;
            
        }
        
        $em->flush();
        
        // $data = 17; // ne sert à rien
        return $this->json($data);
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function addAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        $user = $this->getUser();
        
        $match = $em->getRepository('dswAmpliBundle:Coeur')->match($user, $idee); // retourne Coeur ou null
        
        if ($match) {
            
            // $em->remove($match);
            // do nothing
            
        } else {
            
            $coeur = new Coeur();
            $coeur->setUser($user);
            $coeur->setIdee($idee);
            $em->persist($coeur);
            
        }
        
        $em->flush();
        
        $data = 17; // ne sert à rien
        return $this->json($data);
        
    }
    
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function removeAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('dswAmpliBundle:Idee')->find($id);
        $user = $this->getUser();
        
        $match = $em->getRepository('dswAmpliBundle:Coeur')->match($user, $idee); // retourne Coeur ou null
        
        if ($match) {
            
            $em->remove($match);
            
        } else {
            
            // $coeur = new Coeur();
            // $coeur->setUser($user);
            // $coeur->setIdee($idee);
            // $em->persist($coeur);
            // do nothing
            
        }
        
        $em->flush();
        
        $data = 17; // ne sert à rien
        return $this->json($data);
        
    }
    
}

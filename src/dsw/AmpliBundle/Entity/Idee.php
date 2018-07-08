<?php

namespace dsw\AmpliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Idee
 *
 * @ORM\Table(name="ampli_idee")
 * @ORM\Entity(repositoryClass="dsw\AmpliBundle\Repository\IdeeRepository")
 * @UniqueEntity(fields={"titre","description","espace"})
 */
class Idee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(max=70, maxMessage = "Le titre de l'idée ne peut pas dépasser les {{ limit }} caractères")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\Length(max=140, maxMessage = "La description de l'idée ne peut pas dépasser les {{ limit }} caractères")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="objectifs", type="text", nullable=true)
     */
    private $objectifs;

    /**
     * @var string
     *
     * @ORM\Column(name="methode", type="text", nullable=true)
     */
    private $methode;

    /**
     * @var string
     *
     * @ORM\Column(name="calendrier", type="text", nullable=true)
     */
    private $calendrier;
    
    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imgProjet", type="string", length=255, nullable=true)
     */
    private $imgProjet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imgEquipe", type="string", length=255, nullable=true)
     */
    private $imgEquipe;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\AmpliBundle\Entity\Espace", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $espace;
    
    /**
     * @ORM\ManyToOne(targetEntity="dsw\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\AmpliBundle\Entity\Coeur", mappedBy="idee")
     */
    private $coeurs;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="selection", type="boolean", nullable=true)
     */
    private $selection;
    
    /**
    * @ORM\ManyToOne(targetEntity="dsw\AmpliBundle\Entity\Categorie", inversedBy="idees")
    * @ORM\JoinColumn(nullable=true)
    */
    private $categorie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="equipe", type="string", length=255, nullable=true)
     */
    private $equipe;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\AmpliBundle\Entity\Commentaire", mappedBy="idee")
     */
    private $commentaires;
    
    /**
     * @ORM\OneToMany(targetEntity="dsw\AmpliBundle\Entity\Participation", mappedBy="idee")
     */
    private $participations;
    
    private $imgProjetFile;
    
    private $imgEquipeFile;
    
    
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Idee
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Idee
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set objectifs
     *
     * @param string $objectifs
     *
     * @return Idee
     */
    public function setObjectifs($objectifs)
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    /**
     * Get objectifs
     *
     * @return string
     */
    public function getObjectifs()
    {
        return $this->objectifs;
    }

    /**
     * Set methode
     *
     * @param string $methode
     *
     * @return Idee
     */
    public function setMethode($methode)
    {
        $this->methode = $methode;

        return $this;
    }

    /**
     * Get methode
     *
     * @return string
     */
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * Set calendrier
     *
     * @param string $calendrier
     *
     * @return Idee
     */
    public function setCalendrier($calendrier)
    {
        $this->calendrier = $calendrier;

        return $this;
    }

    /**
     * Get calendrier
     *
     * @return string
     */
    public function getCalendrier()
    {
        return $this->calendrier;
    }

    /**
     * Set espace
     *
     * @param \dsw\AmpliBundle\Entity\Espace $espace
     *
     * @return Idee
     */
    public function setEspace(\dsw\AmpliBundle\Entity\Espace $espace)
    {
        $this->espace = $espace;

        return $this;
    }

    /**
     * Get espace
     *
     * @return \dsw\AmpliBundle\Entity\Espace
     */
    public function getEspace()
    {
        return $this->espace;
    }

    /**
     * Set user
     *
     * @param \dsw\UserBundle\Entity\User $user
     *
     * @return Idee
     */
    public function setUser(\dsw\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \dsw\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coeurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coeur
     *
     * @param \dsw\AmpliBundle\Entity\Coeur $coeur
     *
     * @return Idee
     */
    public function addCoeur(\dsw\AmpliBundle\Entity\Coeur $coeur)
    {
        $this->coeurs[] = $coeur;

        return $this;
    }

    /**
     * Remove coeur
     *
     * @param \dsw\AmpliBundle\Entity\Coeur $coeur
     */
    public function removeCoeur(\dsw\AmpliBundle\Entity\Coeur $coeur)
    {
        $this->coeurs->removeElement($coeur);
    }

    /**
     * Get coeurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCoeurs()
    {
        return $this->coeurs;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Idee
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set imgProjet
     *
     * @param string $imgProjet
     *
     * @return Idee
     */
    public function setImgProjet($imgProjet)
    {
        $this->imgProjet = $imgProjet;

        return $this;
    }

    /**
     * Get imgProjet
     *
     * @return string
     */
    public function getImgProjet()
    {
        return $this->imgProjet;
    }

    /**
     * Set imgEquipe
     *
     * @param string $imgEquipe
     *
     * @return Idee
     */
    public function setImgEquipe($imgEquipe)
    {
        $this->imgEquipe = $imgEquipe;

        return $this;
    }

    /**
     * Get imgEquipe
     *
     * @return string
     */
    public function getImgEquipe()
    {
        return $this->imgEquipe;
    }

    /**
     * Set selection
     *
     * @param boolean $selection
     *
     * @return Idee
     */
    public function setSelection($selection)
    {
        $this->selection = $selection;

        return $this;
    }

    /**
     * Get selection
     *
     * @return boolean
     */
    public function getSelection()
    {
        return $this->selection;
    }

    /**
     * Set categorie
     *
     * @param \dsw\AmpliBundle\Entity\Categorie $categorie
     *
     * @return Idee
     */
    public function setCategorie(\dsw\AmpliBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \dsw\AmpliBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set equipe
     *
     * @param string $equipe
     *
     * @return Idee
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return string
     */
    public function getEquipe()
    {
        return $this->equipe;
    }
    

    /**
     * Add participation
     *
     * @param \dsw\AmpliBundle\Entity\Participation $participation
     *
     * @return Idee
     */
    public function addParticipation(\dsw\AmpliBundle\Entity\Participation $participation)
    {
        $this->participations[] = $participation;

        return $this;
    }

    /**
     * Remove participation
     *
     * @param \dsw\AmpliBundle\Entity\Participation $participation
     */
    public function removeParticipation(\dsw\AmpliBundle\Entity\Participation $participation)
    {
        $this->participations->removeElement($participation);
    }

    /**
     * Get participations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipations()
    {
        return $this->participations;
    }
    
    
    
    
    
    
    // AJOUTS MANUEL
    // TRAITEMENT DES UPLOADS D'IMAGE
    
    public function getImgProjetFile()
    {
        return $this->imgProjetFile;
    }

    public function setImgProjetFile(UploadedFile $imgProjetFile = null)
    {
        $this->imgProjetFile = $imgProjetFile;
    }
    
    public function getImgEquipeFile()
    {
        return $this->imgEquipeFile;
    }

    public function setImgEquipeFile(UploadedFile $imgEquipeFile = null)
    {
        $this->imgEquipeFile = $imgEquipeFile;
    }
    
    
    public function uploadImgProjetFile()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->imgProjetFile) {
            return;
        }
        
        // $redimFile = $this->redim($this->imgProjetFile, 300, 'mini');
        
        

        // On récupère le nom original du fichier de l'internaute
        $name = $this->imgProjetFile->getClientOriginalName();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->imgProjetFile->move($this->getUploadRootDir(), $name);
        
        // $redimFile = $this->redim($zob, 300, 'mini');
        // redim s'appique sur un fichier déjà au bon endroit !
        
        
        
        
        
        // $redimFile->move($this->getUploadRootDir(), $name);

        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->imgProjet = $name;
        
        
        // $destination_file = $_FILES['imageProjet']['name'];
        // définir le nom du FICHIER d'arrivée
        
        // $uploaded_img = verifieEtDeplace($_FILES['imageProjet'], $destination_file);
        // vérifie qu'il n'y ait pas d'erreur au fichier envoyé ; DEJA PRIS EN CHARGE
        // vérification d'une taille maximale
        // vérification de l'extension
        // vérification d'une taille maximale en pixels 
        
        // $fichierDestinationProjet = redimensionne($uploaded_img, 900, 'moyen');
        
        
        
        
        
    }
    
    public function uploadImgEquipeFile()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->imgEquipeFile) {
            return;
        }

        // On récupère le nom original du fichier de l'internaute (natif Symfony)
        $name = $this->imgEquipeFile->getClientOriginalName();

        // On déplace le fichier envoyé dans le répertoire de notre choix (écrit)
        $this->imgEquipeFile->move($this->getUploadRootDir(), $name);

        // On sauvegarde le nom de fichier dans notre attribut $url
        $this->imgEquipe = $name;
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'uploads/img';
    }

    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }
    
    
    
    
    
    
    function redim($src, $new_width, $prefix) {
        
        // Crée une copie redimensionnée d'une image
        
        // Prend en entrée une image, une largeur et un préfixe
        // Renvoie le chemin d'accès à l'image redimensionnée
    
        // $repertoireDestination = "uploads/";
        $repertoireDestination = $this->getUploadDir();
        $fichierDestination = basename($src);

        list($width, $height) = getimagesize($src);

        $percent = $new_width / $width;
        $new_height = $height * $percent;
        // $new_width = $width * $percent;

        // $extension_upload = strtolower (substr (strrchr ($src, '.'), 1));
        $extension_upload = $this->getExtension();

        if ($extension_upload == 'jpeg') $extension_upload = 'jpg';
        switch ($extension_upload) {
            case 'bmp': $image = imagecreatefromwbmp($src); break;
            case 'gif': $image = imagecreatefromgif($src); break;
            case 'jpg': $image = imagecreatefromjpeg($src); break;
            case 'png': $image = imagecreatefrompng($src); break;
            default : return "Unsupported picture type!";
        }

        if (($height / $width) > 2) {
            $crop = 1; // on redimensionne
        } else {
            $crop = 0;
        }

        if ($crop) {
            if ($width > $new_width or $height > $new_height) {
                $ratio = max ($new_width / $width, $new_height / $height);
                $height = $new_height / $ratio;
                $x = ($width - $new_width / $ratio) / 2;
                $width = $new_width / $ratio;
            } else {
                $new_width = $width;
                $new_height = $height;
            }
        } else {
            if ($width > $new_width or $height > $new_height) {
                $ratio = min ($new_width / $width, $new_height / $height);
                $new_width = $width * $ratio;
                $new_height = $height * $ratio;
                $x = 0;
            } else {
                $new_width = $width;
                $new_height = $height;
            }
        }

        ini_set('memory_limit', '200M');
        $new_image = imagecreatetruecolor($new_width, $new_height);

        imagecopyresampled(
            $new_image, 
            $image, 
            0, 
            0, 
            $x, 
            0, 
            $new_width, $new_height, 
            $width, $height);

        $dst_path = $repertoireDestination . $prefix . '_' . $fichierDestination; 

        switch ($extension_upload) {
            case 'bmp': imagewbmp($new_image, $dst_path); break;
            case 'gif': imagegif($new_image, $dst_path); break;
            case 'jpg': imagejpeg($new_image, $dst_path); break;
            case 'png': imagepng($new_image, $dst_path); break;
        }

        return $prefix . '_' . $fichierDestination;

    }
    
    

    
    
    

    /**
     * Add commentaire
     *
     * @param \dsw\AmpliBundle\Entity\Commentaire $commentaire
     *
     * @return Idee
     */
    public function addCommentaire(\dsw\AmpliBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \dsw\AmpliBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\dsw\AmpliBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    
}

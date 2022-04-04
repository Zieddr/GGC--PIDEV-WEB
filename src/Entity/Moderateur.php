<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moderateur
 *
 * @ORM\Table(name="moderateur")
 * @ORM\Entity
 */
class Moderateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_moderateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModerateur;


}

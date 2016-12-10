<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository as EntityRepository;

/**
 * TalentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TalentRepository extends EntityRepository
{
    /**
     * Retourne la liste des utilisateurs associés a un Talent
     * @return Collection<AppBundle:TUser> Liste des utilisateurs
     */
    public function findAllUsersByTalent($talent) {
        return $talent->getIdUser();
    }
}
<?php
namespace MJanssen\Event;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\EventDispatcher\Event;

class RestGetEvent extends Event
{
    /**
     * @var string
     */
    protected $entityName;

    /**
     * @var object
     */
    protected $entity;

    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * @var integer
     */
    protected $identifier;

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
    }

    /**
     * @param $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param EntityRepository $repository
     */
    public function setRepository(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return EntityRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return int
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

} 
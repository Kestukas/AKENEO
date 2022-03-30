<?php

namespace Acme\Bundle\AppBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;

class Supplier extends AbstractCustomEntity
{
    protected $name;
    
    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
} 
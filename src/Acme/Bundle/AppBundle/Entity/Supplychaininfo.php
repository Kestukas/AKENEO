<?php

namespace Acme\Bundle\AppBundle\Entity;

use Akeneo\Pim\Enrichment\Component\Product\Model\AbstractReferenceData;
use Akeneo\Pim\Enrichment\Component\Product\Model\ReferenceDataInterface;


class Supplychaininfo extends AbstractReferenceData implements ReferenceDataInterface
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $chaininfo;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set chaininfo
     *
     * @param string $chaininfo
     */
    public function setChaininfo($chaininfo)
    {
        $this->chaininfo = $chaininfo;
    }

    /**
     * Get chaininfo
     *
     * @return string
     */
    public function getChaininfo()
    {
        return $this->chaininfo;
    }

    /**
     * {@inheritdoc}
     */
    public static function getLabelProperty()
    {
        return 'name';
    }
}

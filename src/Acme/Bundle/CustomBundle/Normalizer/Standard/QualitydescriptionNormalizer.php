<?php

namespace Acme\Bundle\CustomBundle\Normalizer\Standard;

use Acme\Bundle\CustomBundle\Entity\Qualitydescription;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class QualitydescriptionNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard', 'flat'];

    /**
     * @param Qualitydescription $entity
     * @param null  $format
     * @param array $context
     *
     * @return array
     */
    public function normalize($entity, $format = null, array $context = [])
    {
        return [
            'id'    => $entity->getId(),
            'code'  => $entity->getCode(),
            'name'  => $entity->getName(),
            'description'   => $entity->getDescription(),
        ];
    }

    /**
     * @param mixed $data
     * @param null  $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Qualitydescription && in_array($format, $this->supportedFormats);
    }
}

<?php

namespace Acme\Bundle\AppBundle\EventListener;

use Symfony\Component\EventDispatcher\GenericEvent;
use Akeneo\Pim\Enrichment\Component\Product\Model\ProductInterface;

class ProductModificationListener
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onPostSave(GenericEvent $event)
    {
        $subject = $event->getSubject();

        if (!$subject instanceof ProductInterface) {
            // don't do anything if it's not a product
            return;
        }

    }
}
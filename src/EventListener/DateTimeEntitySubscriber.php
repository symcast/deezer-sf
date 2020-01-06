<?php

namespace App\EventListener;

use App\Entity\Product;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

class DateTimeEntitySubscriber implements EventSubscriber
{
    private const PERSIST = 'persist';
    private const UPDATE = 'update';

// this method can only return the event names; you cannot define a
// custom method name to execute when each event triggers
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->logActivity(self::PERSIST, $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->logActivity(self::UPDATE, $args);
    }

    private function logActivity(string $action, LifecycleEventArgs $args)
    {
        $entity = $args->getObject();


        switch ($action) {
            case self::PERSIST:
                $entity->setCreatedAt(new \DateTime());
                $entity->setUpdatedAt(new \DateTime());
                break;
            case self::UPDATE:
                $entity->setUpdatedAt(new \DateTime());
                break;
        }

        $entity->setCreatedAt(new \DateTime());
    }
}

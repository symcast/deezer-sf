<?php

namespace App\Repository;

use App\Entity\Notification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Notification|null find($id, $lockMode = null, $lockVersion = null)
 * @method Notification|null findOneBy(array $criteria, array $orderBy = null)
 * @method Notification[]    findAll()
 * @method Notification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotificationRepository extends AbstractRepository
{

    public function search($isRead, $order = 'asc', $limit = 20, $offset = 0)
    {
        $qb = $this
            ->createQueryBuilder('n')
            ->select('n')
            ->orderBy('n.createdAt', $order);

        if ($isRead) {
            $qb
                ->where('n.isRead = :isRead')
                ->setParameter('isRead' , $isRead);
        }

        return $this->paginate($qb, $limit, $offset);
    }
}

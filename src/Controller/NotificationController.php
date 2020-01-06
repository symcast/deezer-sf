<?php

namespace App\Controller;

use App\DTO\Representation;
use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api")
 */
class NotificationController extends AbstractController
{
    /** @var SerializerInterface  */
    private $serializer;

    /** @var EntityManagerInterface */
    private $em;

    public function __construct(SerializerInterface $serializer,  EntityManagerInterface $em)
    {
        $this->serializer = $serializer;
        $this->em = $em;
    }

    /**
     * @Route("/notification", name="notification")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/NotificationController.php',
        ]);
    }

    /**
     * @Rest\Put(path="/notification/{id}/read", name="read_notification")
     *
     */
    public function readNotification(Notification $notification)
    {
        $notification->setIsRead(true);

        $this->em->flush();

        $json = $this->serializer->serialize($notification, JsonEncoder::FORMAT, ['groups' => ['default']]);

        return new Response($json, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Rest\Get(path="/notifications", name="list_notification")
     * @Rest\View()
     *
     */
    public function getNotificatios(Request $request)
    {

        $status = $request->query->get('status');
        $order = $request->query->get('order', Notification::ORDER_ASC);
        $limit = $request->query->get('limit', 20);
        $offset = $request->query->get('offset', 1);


        if (null !== $status && !in_array($status, [Notification::READ, Notification::UNREAD])) {
            return new Response('Error in STATUS parameter', Response::HTTP_BAD_REQUEST);
        }

        if (null !== $order && !in_array($order, [Notification::ORDER_ASC, Notification::ORDER_DESC])) {
            return new Response('Error in ORDER parameter', Response::HTTP_BAD_REQUEST);
        }

        $pager = $this->em->getRepository(Notification::class)->search($status, $order, $limit, $offset);

        return new Representation($pager);
    }
    
    
}

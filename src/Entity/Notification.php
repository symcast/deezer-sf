<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Table(name="notifications")
 * @ORM\Entity(repositoryClass="App\Repository\NotificationRepository")
 */
class Notification
{
    use DateTimeTrait;

    const TYPE_REC = 'recommandation';
    const TYPE_NOUV = 'nouveauté';
    const TYPE_SHARE = 'partage';
    const TYPE_INFO = 'information';

    const READ = 'read';
    const UNREAD = 'unread';

    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("default")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("default")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("default")
     */
    private $periodOfValidity;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("default")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("default")
     */
    private $isRead;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * @Groups("default")
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumn(name="album_content", referencedColumnName="id", nullable=true)
     */
    private $albumContent;

    /**
     * @ORM\ManyToOne(targetEntity="Playlist")
     * @ORM\JoinColumn(name="playlist_content", referencedColumnName="id", nullable=true)
     */
    private $playlistContent;

    /**
     * @ORM\ManyToOne(targetEntity="Track")
     * @ORM\JoinColumn(name="track_content", referencedColumnName="id", nullable=true)
     */
    private $trackContent;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_content", referencedColumnName="id", nullable=true)
     */
    private $userContent;

    /**
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumn(name="Podcast_content", referencedColumnName="id", nullable=true)
     */
    private $podcastContent;


    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPeriodOfValidity(): ?string
    {
        return $this->periodOfValidity;
    }

    public function setPeriodOfValidity(?string $periodOfValidity): self
    {
        $this->periodOfValidity = $periodOfValidity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getAlbumContent(): ?Album
    {
        return $this->albumContent;
    }

    public function setAlbumContent(?Album $albumContent): self
    {
        $this->albumContent = $albumContent;

        return $this;
    }

    public function getPlaylistContent(): ?Playlist
    {
        return $this->playlistContent;
    }

    public function setPlaylistContent(?Playlist $playlistContent): self
    {
        $this->playlistContent = $playlistContent;

        return $this;
    }

    public function getTrackContent(): ?Track
    {
        return $this->trackContent;
    }

    public function setTrackContent(?Track $trackContent): self
    {
        $this->trackContent = $trackContent;

        return $this;
    }

    public function getUserContent(): ?User
    {
        return $this->userContent;
    }

    public function setUserContent(?User $userContent): self
    {
        $this->userContent = $userContent;

        return $this;
    }

    public function getPodcastContent(): ?Album
    {
        return $this->podcastContent;
    }

    public function setPodcastContent(?Album $podcastContent): self
    {
        $this->podcastContent = $podcastContent;

        return $this;
    }
}

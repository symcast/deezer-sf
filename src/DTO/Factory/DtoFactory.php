<?php

namespace App\DTO\Factory;

use App\DTO\Album;
use App\DTO\Author;
use App\DTO\DtoInterface;
use App\DTO\Notification;
use App\DTO\Playlist;
use App\DTO\Podcast;
use App\DTO\Track;
use App\Entity\Album as AlbumEntity;
use App\Entity\Notification as NotificationEntity;
use App\Entity\Playlist as PlaylistEntity;
use App\Entity\Podcast as PodcastEntity;
use App\Entity\Track as TrackEntity;
use App\Entity\User;

class DtoFactory implements FactoryInterface
{

    public static function createAlbum(?AlbumEntity $album): ?DtoInterface
    {
        if(null === $album) {
            return null;
        }

        $tracks = [];

        if($album->getTracks()->count() > 0) {
            foreach ( $album->getTracks() as $item) {
                $tracks[] = self::createTrack($item);
            }
        }

        return new Album(
            $album->getId(),
            $album->getLabel(),
            $tracks
        );
    }

    public static function createAuthor(?User $user): ?DtoInterface
    {
        if(null === $user) {
            return null;
        }

        return new Author(
            $user->getId(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getEmail(),
            $user->getNickname(),
            $user->getRole()
        );  //DONE
    }

    public static function createNotification(?NotificationEntity $notification): ?DtoInterface
    {
        if(null === $notification) {
            return null;
        }

        return new Notification(
            $notification->getId(),
            $notification->getType(),
            $notification->getPeriodOfValidity(),
            $notification->getDescription(),
            $notification->getIsRead(),
            self::createAuthor($notification->getAuthor()),
            self::createAlbum($notification->getAlbumContent()),
            self::createPlaylist($notification->getPlaylistContent()),
            self::createTrack($notification->getTrackContent()),
           null
        );
    }

    public static function createPlaylist(?PlaylistEntity $playlist): ?DtoInterface
    {
        if(null === $playlist) {
            return null;
        }

        $tracks = [];

        if($playlist->getTracks()->count() > 0) {
            foreach ( $playlist->getTracks() as $item) {
                $tracks[] = self::createTrack($item);
            }
        }

        return new Playlist(
            $playlist->getId(),
            $playlist->getLabel(),
            $tracks
        ); //DONE
    }

    public static function createPodcast(?PodcastEntity $podcast): ?DtoInterface
    {
        if(null === $podcast) {
            return null;
        }

        return new Podcast($podcast->getId(), $podcast->getLabel());
    }

    public static function createTrack(?TrackEntity $track): ?DtoInterface
    {
        if(null === $track) {
            return null;
        }

        return new Track($track->getId(), $track->getLabel() ); //DONE
    }
}
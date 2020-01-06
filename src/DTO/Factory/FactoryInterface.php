<?php

namespace App\DTO\Factory;

use App\DTO\DtoInterface;
use App\Entity\Album;
use App\Entity\Notification;
use App\Entity\Playlist;
use App\Entity\Podcast;
use App\Entity\Track;
use App\Entity\User;

interface FactoryInterface
{
    public static function createAlbum(?Album $album): ?DtoInterface;

    public static function createAuthor(?User $user): ?DtoInterface;

    public static function createNotification(?Notification $notification): ?DtoInterface;

    public static function createPlaylist(?Playlist $playlist): ?DtoInterface;

    public static function createPodcast(?Podcast $podcast): ?DtoInterface;

    public static function createTrack(?Track $track): ?DtoInterface;
}
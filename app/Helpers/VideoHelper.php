<?php

namespace App\Helpers;

class VideoHelper
{
    /**
     * Get the duration of the video in HH:MM:SS format.
     *
     * @param string $videoPath
     * @return string
     */
    public static function getVideoDuration($videoPath)
    {
        // Use FFMpeg to open the video file
        $video = \ProtoneMedia\LaravelFFMpeg\Support\FFMpeg::fromDisk('public')->open($videoPath);

        // Get the duration of the video in seconds
        $durationInSeconds = $video->getDurationInMiliseconds();
        // Convert seconds to HH:MM:SS format
        return gmdate("H:i:s", $durationInSeconds);
    }
}

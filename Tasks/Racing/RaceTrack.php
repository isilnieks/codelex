<?php

class RaceTrack
{
    const LENGTH = 30;

    public function createTrack(): string
    {
      return str_repeat('_', self::LENGTH);
    }

}
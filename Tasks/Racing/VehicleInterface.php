<?php

interface VehicleInterface{

    public function getSpeed(): int;
    public function getName(): string;
    public function getSymbol(): string;
    public function drive(RaceTrack $track): string;

}
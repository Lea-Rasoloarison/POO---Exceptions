<?php

class Car
{
    private bool $hasParkBrake = true;

    public function setParkBrake(bool $isSet): void
    {
        $this->hasParkBrake = $isSet;
    }

    public function start(): bool
    {

        if ($this->hasParkBrake === true) {
            throw new Exception('Homer réfléchit voyons ... !! ');

        }

        return $this->hasParkBrake === false;
    }

}


<?php

class Car
{
    private bool $hasParkBrake = true;

    public function setParkBrake(bool $isSet): void
    {
        $this->hasParkBrake = $isSet;
    }

    public function start(): void
    {
        try {
            if ($this->hasParkBrake) {
                throw new Exception('Homer réfléchit voyons ... !! ');
            }
        } catch (Exception $e) {
            $this->setParkBrake(false);
        } finally {
            echo "En voiture simone";
        }
    }
}

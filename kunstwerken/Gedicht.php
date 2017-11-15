<?php

namespace Kunstwerken;

class Gedicht extends kunstwerkAbstract implements InterfaceWoorden
{
    public $woorden;

    public function getWoorden(): ?string{
        return $this->woorden;
    }
    public function setWoorden($woorden): void{
        $this->woorden = $woorden;
    }
}
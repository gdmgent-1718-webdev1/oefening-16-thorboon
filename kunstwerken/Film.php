<?php

namespace Kunstwerken;

class Film extends kunstAbstract implements InterfaceDuur
{
    public $duur;
    public $afbeelding;

    public function getDuur(): ?string{
        return $this -> duur;
    }

    public function setDuur ($duur):  void{
        $this-> duur =$duur;
    }
    public function getAfbeelding(): ?string{
        return $this-> afbeelding;
    }

    public function setAfbeelding($afbeelding): void {
        $this-> afbeelding = $afbeelding;
    }
}
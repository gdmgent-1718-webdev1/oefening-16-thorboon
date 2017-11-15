<?php
namespace Kunstwerken;

class Vaas extends kunstwerkAbstract implements interfaceAfbeelding
{
    public $afbeelding;
    public $gewicht;

    public function getAfbeelding(): ?string{
        return $this->afbeelding;
    }

    public function setAfbeelding($afbeelding): void{
        $this->afbeelding = $afbeelding;
    }

    public function getGewicht(): ?string{
        return $this->gewicht;
    }

    public function setGewicht($gewicht): void{
        $this->gewicht = $gewicht;
    }
}
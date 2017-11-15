<?php 

namespace Kunstwerken;

class Foto extends kunstwerkAbstract implements InterfaceAfbeelding
{
    public $afbeelding;

    public function getAfbeelding(): ?string{
        return $this->afbeelding;
    }
    public function setAfbeelding($afbeeldign):void{
        $this->afbeelding = $afbeelding;
    }
}
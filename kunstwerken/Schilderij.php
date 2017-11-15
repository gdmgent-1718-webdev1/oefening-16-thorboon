<?php
namespace Kunstwerken;

class Schilderij extends kunstwerkenAbstract implements InfterfaceAfbeelding
{
    public $afbeelding;

    public function getAfbeelding(): ?string{
        return $this->afbeelding;
    }
    public function setAfbeelding($afbeelding): void{
        $this->afbeelding = $afbeelding;
    }
}
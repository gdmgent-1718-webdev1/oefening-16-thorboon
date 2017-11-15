<?php

namespace Kunstwerken;

class Lied extends kunstwerkAbstract implements InterfaceDuur
{
    public $duur;

    public function getDuur():?string{
        return $this->duur;
    }
    public function setDuur($duur): void{
        $this->duur = $duur;
    }
}
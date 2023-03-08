<?php

trait Recensione
{
    protected $stella = "&#9733;";

    public function getRecensione()
    {
        return $this->stella;
    }
    public function setRecensione($stella)
    {
        $this->stella = $stella;
    }
    public function stampVoto($voto)
    {
        return $voto . $this->stella;
    }
}

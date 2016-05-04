<?php

namespace Hackathon\LevelD;

class Brute
{
    private $hash;
    public $origin;
    private $method; // md5 - crc32 - base64 - sha1

    public function __construct($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @TODO :
     *
     * Cette méthode essaye de trouver par la force à quel mot de 4 lettres correspond ce hash.
     * Sachant que nous ne connaissons pas le hash (enfin si... il suffit de regarder les commentaires de l'attribut privé $methode.
     */
    public function force()
    {
        for ($i = 'aaaa'; $i <= 'zzzz'; $i++) {
            if (md5($i) == $this->hash) {
                $this->origin = $i;
            }
            if (crc32($i) == $this->hash) {
                $this->origin = $i;
            }
            if (base64_encode($i) == $this->hash) {
                $this->origin = $i;
            }
            if (sha1($i) == $this->hash) {
                $this->origin = $i;
            }
        }
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 13.06.2017
 * Time: 20:57
 */

class Admin extends User
{
    public function __construct($n, $a, $c)
    {
        parent::__construct($n, $a);
            return $this->curs = $c;
    }

    public function getCurs() {
        return $this->curs;
    }
}
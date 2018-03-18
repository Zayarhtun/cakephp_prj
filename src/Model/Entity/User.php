<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher as Hasher;

class User extends Entity {

    protected function _setPassword($password) {
        $hasher = new Hasher();
        return $hasher->hash($password);
    }

}

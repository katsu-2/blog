<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity
{
  protected $_accessible = [
    'title'    => true,
    'content'  => true,
    'created'  => true,
    'modified' => true
  ];
}

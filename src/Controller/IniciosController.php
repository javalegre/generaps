<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

use Acl\Controller\Component\AclComponent;
use AclManager\AclExtras;

class IniciosController extends AppController
{
    public function inicio()
        {

        $this->loadComponent('Acl');

// hola Mundo
        }
}

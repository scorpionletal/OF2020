<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
//use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;
use Ocrend\Kernel\Router\IRouter;

/**
 * Controlador desarrollo/
*/
class desarrolloController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router, array(
            'users_not_logged'=> true,
            'cache'=>true
        ));
        global $http,$session;

        if (null == $session->get('mi_sesion')) {
            $session->set('mi_sesion',date('h:i:s', time()));
        }
        //echo Helper\Strings::amigable_time(time()-60*60);
        //dump($session->get('mi_sesion'));

/*         $this->template->addExtension(new Helper\Strings);
        $this->template->display('desarrollo/desarrollo'); */

        $d = new Model\Desarrollo($router);
        $this->template->display('desarrollo/desarrollo',array(
            'respuesta' => $d->ver_id_user_conectado()
        )); 


    }
}
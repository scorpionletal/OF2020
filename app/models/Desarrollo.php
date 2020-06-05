<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Desarrollo
 */
class Desarrollo extends Models implements IModels {
    


    /**
     * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
    }
    public function mi_metodo() :string{
        return 'hola estoy en modelo- funcion mi_metodo()';
    }

    public function ver_id_user_conectado() : string {
        if (null != $this->id_user) {
            return 'el usuario conectado es ' . $this->id_user;
        }
        return 'El usuario no esta conectado';
    }
     
}
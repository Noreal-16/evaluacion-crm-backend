<?php

namespace App\Http\Controllers;
 
use App\Models\EmailAddrBeanRel;
use App\Models\EmailAddreses; 
use App\Models\Users;
use Illuminate\Http\Request;
use UsersTransformer;
/**
 * @group Asesores
 *
 * Api para Obtener asesores
 */
class UsersController extends BaseController
{
    /**
     * Obtiene los asesores comerciales disponibles de un medio requerido
     *
     * @bodyParam  medio numeric required Medio requerido  Example: 11
     *
     * @response  {
     * "data": [
     *      {
     *          "nombres": "FRANCISCO XAVIER",
     *          "apellidos": "VILLAMAR CASTRO",
     *          "celular": "0987647944",
     *          "user_name": "MA_PALACIOS",
     *          "email": "fvillamar@1001carros.com",
     *          "agencia": "CUMBAYA",
     *          "lineas_negocio": [
     *              "SEMINUEVOS"
     *          ]
     *    },
     *    {
     *          "nombres": "Admin",
     *          "apellidos": "SugarCRM",
     *          "celular": null,
     *          "user_name": "admin",
     *          "email": "mwherrera@plus-projects.com",
     *          "agencia": "MATRIZ",
     *          "lineas_negocio": []
     *    }
     * ]
     * }
     *
     * @response 500 {
     *  "message": "Unauthenticated.",
     *  "status_code": 500
     * }
     */
    public function getAsesores(Request $request)
    {
        $users = Users::get_coordinadores(false);

        return $this->response->collection($users, new UsersTransformer)->setStatusCode(200);
    } 
}


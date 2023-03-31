<?php

namespace App\Http\Controllers;

use App\Models\Pares;
use Illuminate\Http\Request;
/**
 * @group Pares
 *
 * Api para Obtener los pares de un arreglo
 */
class ParesController extends Controller
{
    /**
     * Obtiene todas las operaciones realizadas con los pares
     */
    public function index(){
        return Pares::all();
    }

    /**
     * Registra los valores de la matriz, objetive y el resultado de pares
     *
     * @bodyParam  objetive  required El El valor objetivo. Example: 2
     * @bodyParam  arrays  required El Arreglo para buscar los pares. Example: [1,2,3,4,5]
     *
     * @response  200 {
     *  'status_code' => 200,
    *   'message' => $dataBody
     * }
     * @response  500 {
     *  "message": "Valor ingresado Incorrecto"
     * }
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'arrays' => 'required|array|min:2|max:100000',
            'arrays.*' => 'integer|min:0|max:2147483647',
            'objetive' => 'required|integer|min:0|max:9',
        ]);
    
        $n = count($validatedData['arrays']);
    
        if ($n < 2 || $n > 100000) {
            return response()->json(['status_code' => 400, 'message' => 'Datos de matriz ingresados inválidos']);
        }
    
        if ($validatedData['objetive'] < 0 || $validatedData['objetive'] > 9) {
            return response()->json(['status_code' => 400, 'message' => 'Datos del objetivo ingresados inválidos']);
        }

        $dataBody = new Pares;
        $matriz = $request->input('arrays');
        $objetive = $request->input('objetive');

        $dataBody->objetive = $objetive;
        $dataBody->arrays = json_encode($matriz);
        $dataBody->pairs = $this->findPairsWithArrays($matriz, $objetive);

        $dataBody->save();
        return response()->json([
            'status_code' => 200,
            'message' => $dataBody
         ]);
    }

    /**
     * Función para buscar los pares de una matriz
     * @bodyParam  objetive  required El El valor objetivo. Example: 2
     * @bodyParam  arrays  required El Arreglo para buscar los pares. Example: [1,2,3,4,5]
     */
    function findPairsWithArrays($arrayInt, $objetive){
        sort($arrayInt);
        $count = 0;
        for ($i = 0; $i < count($arrayInt); $i++) {
            for ($j = $i + 1; $j < count($arrayInt); $j++) {

                $diferentialAbs = abs($arrayInt[$i] - $arrayInt[$j]);

                if ($diferentialAbs == $objetive) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

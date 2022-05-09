<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tiendas/mostraregistro',[TiendaController::class,'create']);
Route::post('/tiendas/mostrarexito',[TiendaController::class,'store']);
Route::get ("hola",function(){
    echo "hola";
});
Route::get ("arreglos",function(){
    $estudiantes =[ "An" => "Juan",
    "DN" =>    "Daniel",
    "JS" =>   "jersson"];
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    echo "<hr/>";
    //agregar poscicion 
    $estudiantes ["CR"] = "cristian"; 
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    //retirar elementos de un arreglo 
    echo "<hr/>";
    unset($estudiantes["CR"]);
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";

} );
 Route::get ("paises",function(){
    $paises =[  
        "colombia" => [
            "capital" => "bogota",
            "moneda" => "peso",
            "poblacion" => "11.000",
            "ciudades" => [
                "bogota",
                "cali",
                "medellin"
            ]
        ],
         "peru" => [
             "capital" => "lima",
            "moneda" => "sol",
            "poblacion" => "11.000",
            "ciudades" => [
                "cuzco",
                "piura"
            ]
         ],
         "urugay" => [
             "capital" => "montevideo",
            "moneda" => "peso uruguayo",
            "poblacion" => "11.000",
            "ciudades" => [
                "maldonado",
                "melo",
            ]
         ]
 ];
             /*   echo"<pre>";
                   var_dump($paises);
                echo"</pre>";


                 foreach($paises as $pais => $infopais ) {
            echo " <h1> $pais </h1> ";
            echo "capital:".$infopais ["capital"];
            echo"</br>";
            echo "moneda:".$infopais ["moneda"];
            echo"</br>";
            echo "poblacion:".$infopais ["poblacion"];
            foreach ($infopais as $clave => $valor ){
                    echo"$clave: $valor <br/>";
            };
        } */
    return view ('paises')
            -> with ("paises", $paises);

} );
<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

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
// Crear nueva ruta
Route::get('hola', function(){
    return "Hello world";
});
// Crear ruta de arreglos
Route::get('arreglo',function(){
    $estudiantes=
    [  
       "AN" => "Ana", 
        "JU" =>"Juana", 
        "PA"=>"Paola"
    ];
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    echo"<hr/>";
    // agregar posicion
    $estudiantes["CR"]="Cristian";
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    // retirar elementos de un arreglo
    echo"<hr/>";
    unset($estudiantes["JU"]);
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
});
Route::get('paises',function(){
    $paises=[
    "Colombia"=>[
        "imagen"=>"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAPFBMVEX81wAAN4fLBhSkjAH/3ADPBhSEBAz/3wAAIY0AOYvSAAABIleHBAx0YgOojwGrkQD/5AAAEluJAABdBAgl0lkcAAABhklEQVR4nO3Q2VVCURRAsatMIo+5/15lWcHZ/0kJWdfbjpHbdd1Oe0ZOt7XbL0b2O1ljsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICj5Z98eJkcd9PX8Yeq7L+YuR80XWmKxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQF/1kMXdbrl6HXOh6+GTkcZY3JCmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgaxAViArkBXICmQFsgJZgazgk7UdGNrWezsysr3/AKA11CmMDT1rAAAAAElFTkSuQmCC",
        "capital"=>"Bogotá",
        "moneda"=>"Peso",
        "poblacion"=>"50,88 millones",
        "ciudades"=>[
            "Bogota",
            "Medellin",
            "Cali"
        ]
    ],
    "Japon"=>[
        "imagen"=>"https://s1.significados.com/foto/bandera-japon_sm.png",
        "capital"=>"tokyo",
        "moneda"=>"yen",
        "poblacion"=>"125.8 millones",
        "ciudades"=>[
            "Tokyo",
            "Hiroshima",
            "Nagazaky"
        ]

    ],
    "Peru"=>[
          "imagen"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Flag_of_Peru_%281825%E2%80%931884%29.svg/270px-Flag_of_Peru_%281825%E2%80%931884%29.svg.png",
        "capital"=>"lima",
        "moneda"=>"sol",
        "poblacion"=>"32.97 millones",
        "ciudades"=>[
            "Lima",
            "Arequipa",
            "Cusco"
        ]

    ],
    "Argentina"=>[
          "imagen"=>"https://www.protocolo.org/extfiles/i-8154-cG.22202.1.jpg",
        "capital"=>"buenos aires",
        "moneda"=>"peso",
        "poblacion"=>"45,38 millones",
        "ciudades"=>[
            "Buenos aires",
            "La plata",
            "Rosario"
        ]

    ],
    "Paraguay"=>[
          "imagen"=>"https://www.ngenespanol.com/wp-content/uploads/2018/08/%C2%BFSabes-por-qu%C3%A9-la-bandera-de-Paraguay-es-%C3%BAnica-en-Am%C3%A9rica-1280x720.jpg",
        "capital"=>"asuncion",
        "moneda"=>"guarani",
        "poblacion"=>"7.1 millones",
        "ciudades"=>[
            "Asuncion",
            "Encarnación",
            "Ciuad del este"
        ]
    ]
    ];
    // foreach($paises as $pais=>$infoPais){
    //     echo"<pre>";
    //     echo "<h1 style=\"color:red\">$pais</h1>";
    //     echo "capital: ".$infoPais["capital"]."<br>";
    //     echo "moneda: ".$infoPais["moneda"]."<br>";
    //     echo "poblacion: ".$infoPais["poblacion"]."<br>";
    //     echo"</pre>";
    //     echo "<hr/>";
    // }

    // foreach ($paises as $pais => $infoPais) {
    //     echo"<h1 style=\"color:#E0BAF1\">$pais</h1>";
    //     foreach ($infoPais as $clave => $valor) {
    //         echo "$clave : $valor <br>";
    //         foreach ($valor as $ciudadesPrincipales => $infoCiudades) {
    //             echo "$ciudadesPrincipales:$infoCiudades <br>";
    //         }
    //     }
    //     echo "<hr>";
    // }
    return view('paises')->with("paises", $paises);
});

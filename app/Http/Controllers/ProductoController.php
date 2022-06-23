<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productos=Producto::all();
        return view('products/listProductos')->with("productos",$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Seleccionar marcas y categorias desde la db
        $marcas=Marca::all();
        $categorias=Categoria::all();
        return view('products.new')->with("marcas",$marcas)->with("categorias",$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // var_dump($request->nombre);
        // var_dump($request->descripcion);
        // var_dump($request->precio);
        // var_dump($request->imagen);
        // echo "</pre>";

        //Crear el objeto uploadedFile


        // Validations
        // 1-Establecer reglas de validacion a aplicar
        // para la 'input data'

        $reglas=[
            "nombre"=>'required|alpha|unique:productos,nombre',
            "descripcion"=>'required|min:10|max:100',
            "precio"=>'required|numeric',
            "imagen"=>'required|image',
            "marca"=>'required',
            "categoria"=>'required',
        ];
        // 2 objeto validador        
        $v=Validator::make($request->all(),$reglas,$message=[
            'required' => 'el campo :attribute es requerido',
            'min' => 'El campo debe tener un minimo de :min caracteres',
            'max' => 'El campo debe tener un maximo de :max caracteres',
            'numeric' => 'El campo solo debe tener numeros',
            'image' => 'El campo debe tener una imagen',
            'unique' =>'El campo ya tiene un registro en la base de datos'
        ]);
        // 3 Validar
        // fails return si la validacion falla y un false si no
        if($v->fails()){
            // Mostrar la vista new pero llevando los errores
            return redirect('productos/create')->withErrors($v);
        }else{
            $archivo=$request->imagen;
            $nombre_archivo=$archivo->getClientOriginalName();
            // Mover el arvhivo a la carpeta public
            $ruta=public_path();
            var_dump($ruta);
            $archivo->move("$ruta/img/",$nombre_archivo);
            // Registrar producto
            $producto=new Producto();
            $producto->nombre=$request->nombre;
            $producto->descripcion=$request->descripcion;
            $producto->precio=$request->precio;
            $producto->imagen=$nombre_archivo;
            $producto->marca_id=$request->marca;
            $producto->categoria_id=$request->categoria;
            $producto->save();
            return redirect('/productos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        return "Producto $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        return "Editar Form $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}

@extends('layouts.menu')

@section('contenido')
<div class="row col s-12">
    <div class="container row">
        <form  action="{{ route('productos.store') }}" method="POST" class="col s8 center-align" enctype="multipart/form-data">
            @csrf
            <h1 class="deep-purple-text center-align text-darken-3">New Product </h1>
                <div class="row">
                    <div class="col s12 input-field">
                        <input type="text" id="nombre" name="nombre" class="validate">
                        <label for="nombre">Name Of Product</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 input-field ">
                        <textarea id="descripcion" name="descripcion" class="materialize-textarea"></textarea>
                        <label for="descripcion">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 input-field ">
                        <input type="number" id="precio" name="precio" class="validate">
                        <label for="precio">Price</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 file-field input-field ">
                        <div class="btn deep-purple darken-3">
                            <span>Image of product</span>
                            <input type="file" name="imagen">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="marca" id="marca">
                        <option value="" disabled selected>Choose your option</option>
                          @foreach($marcas as $marca)
                          <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                          @endforeach
                        </select>
                        <label>Select Mark</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="categoria" id="categoria">
                            <option value="" disabled selected>Choose your option</option>
                          @foreach($categorias as $categoria)
                          <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                          @endforeach
                        </select>
                        <label>Select Category</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn  btn-large center-align   purple darken-4" type="submit">
                        Save Product <i class="material-icons right">send</i>
                    </button>
                </div>
        </form>
    </div>  
</div>
@endsection
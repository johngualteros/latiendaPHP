@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="deep-purple-text text-darken-3">New Product </h1>
    <div class="row">
        <form  action="" method="POST" class="col s8 ">
                <div class="row">
                    <div class="col s8 input-field ">
                        <input type="text" id="name" name="name" class="validate">
                        <label for="name">Name Of Product</label>
                    </div>
                </div>
            <div class="row">
                <div class="col s8 input-field ">
                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
                    <label for="description">Text area</label>
                </div>
            </div>
            <div class="row">
                <div class="col s8 input-field ">
                    <input type="number" id="price" name="price" class="validate">
                    <label for="price">Price</label>
                </div>
            </div>
            <div class="row">
                <div class="col s8 file-field input-field ">
                    <div class="btn deep-purple darken-3">
                        <span>Image of product</span>
                        <input type="file" multiple name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        </form>
    </div>  
</div>
@endsection
<?php

public function editarDatos(Request $req){
    $reglas=[
        "name"=> "required | string | min:2",
        "surname"=> "required | string | min:2",
        "password"=>   "required | string |min:8",
        "imagen"=> "image"
        ];
    $mensajes=[
        "required"=> "No completaste el campo :attribute",
        "string"=> "El campo :attribute debe ser un texto",
        "min"=> "El campo :attribute tiene un minimo de :min",
        "email"=> "El email es incorrecto",
        "max"=> " El campo :attribute tiene un maximo de :max"
        ];
    this->validate($req, $reglas, $mensajes);
    cliente -> name = $req["name"];
    cliente -> surname = $req["surname"];
    cliente -> password = $req["password"];
    cliente -> imagen = $req["imagen"];
$ruta=$req -> file("fotoP")->store("public");
$nombreArchivo= basename($ruta);
$peliculaNueva -> fotoP = $nombreArchivo;
    cliente-> save();
    return redirect("/miperfil");
}

?>
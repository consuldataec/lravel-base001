<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index()
    {
        $data = array(      "estado"        => "inactivo",
        "titulo"        => "Admin - Tipo de documentos",
        "aplicacion"    => "Admin/tipoDocumento/index",);
        return view('admin.index-doctype',$data);
    }
}

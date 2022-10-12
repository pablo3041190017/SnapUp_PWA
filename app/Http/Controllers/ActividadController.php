<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index() {
        $actividad = Actividad::all()->toJson();
        return $actividad;
    }

    public function save(){
        $actividad = new Actividad;
        $actividad->name = 'Super Administrador';
        $actividad->key_name = 'superadmin';
        $actividad->description = 'descripcion';
        $actividad->save();
    }

    public function update($id){
        $actividad = Actividad::find($id);
        $actividad->name = 'Administrador';
        $actividad->key_name = 'admin';
        $actividad->description = 'new description';
        $actividad->save();
    }

    public function delete($id){
        $actividad = Actividad::find($id);
        $actividad->delete();
    }
}
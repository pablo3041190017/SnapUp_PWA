<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller{
    public function index(){
        $roles = Role::all()->toJson();
        // dd($roles);
        return $roles;
    }

    public function save(){
        $role = new Role;
        $role->name = 'Super administrador';
        $role->key_name = 'superadmin';
        $role->save();
    }

    public function update($id){
        $role = Role::find($id);
        $role->name = 'Administrador';
        $role->key_name = 'admin';
        $role->save();
    }

    public function delete($id){
        $role = Role::find($id);
        $role->delete();
    }
}

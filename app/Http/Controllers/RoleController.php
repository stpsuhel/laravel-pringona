<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function store(){
        $role = new Role();

        return 'Role Created SuccessFully';
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function store(){
        $role = new Role();

        $role->create([
            'name' => 'ROLE_ADMIN',
        ]);

        $role->create([
            'name' => 'ROLE_USER',
        ]);
        return 'Role Created SuccessFully';
    }
}

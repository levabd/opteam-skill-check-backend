<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Opteam\Models\UserRole;

class RoleController extends Controller {

    public function index()
    {
        return UserRole::all();
    }
}
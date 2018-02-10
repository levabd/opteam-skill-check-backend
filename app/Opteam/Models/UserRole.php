<?php

namespace App\Opteam\Models;

class UserRole extends BaseModel
{
    public $timestamps= false;

    protected $fillable=['name'];
    protected $visible =[ 'id', 'name'];

}

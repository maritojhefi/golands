<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    const ROLADMIN = 'admin';
    const ROLUSER = 'user';
    protected $fillable = ['name', 'username', 'email', 'number', 'password', 'rol'];
    

}

<?php

namespace App\Models;

use Vista\Model\Model;

class User extends Model
{
    protected string $table = 'users';
    protected array $columns = ['id', 'name', 'email', 'password'];
}
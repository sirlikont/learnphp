<?php

namespace App\Models;

use App\DB;

class User extends Model {
    protected static $table = 'users';

    public $id;
    public $email;
    public $password;

}
<?php

namespace App\Models;

use Foundation\Model;
use Foundation\Database\Query;

class Post extends Model {
    protected static $table = 'posts';

    //protected $table = 'users';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'fullname',
        'email',
        'age',
        'gender',
        'phone',
        'photo',
        'role',
        'status',
        'password',
    ];
}

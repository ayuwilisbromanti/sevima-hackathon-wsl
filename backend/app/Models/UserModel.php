<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = "user_chat";
    protected $primarykey = "id";
    public $timestamps = false;
    public $fillable = [
        'username',
        'name',
        'password'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionModel extends Model
{
    use HasFactory;
    protected $table = "question";
    protected $primarykey = "id";
    public $timestamps = false;
    public $fillable = [
        'question',
        'answer'
    ];
}

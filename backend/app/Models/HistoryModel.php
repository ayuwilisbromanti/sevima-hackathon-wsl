<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    use HasFactory;
    protected $table = "history";
    protected $primarykey = "id";
    public $timestamps = false;
    public $fillable = [
        'id_question',
        'created_at',
        'question',
        'answer'
    ];
}

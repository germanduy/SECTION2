<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'sbid' ;
    protected $keyType = 'string' ;
    protected $fillable = [
        "name",
        "created_at",
        "update_at"
    ];

}

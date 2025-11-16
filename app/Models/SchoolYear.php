<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        "nick_name",
        "description",
        "start_date",
        "end_date"
    ];
}

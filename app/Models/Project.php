<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        "language" => "array",
        "date" => "date"
    ];

    protected $fillable = [
        "title",
        "language",
        "link",
        "description",
        "thumb",
        "release"
    ];
}

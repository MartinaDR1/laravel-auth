<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'duration', 'start_date', 'end_date'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}

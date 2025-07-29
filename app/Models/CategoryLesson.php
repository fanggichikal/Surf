<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLesson extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function surfLessons()
    {
        return $this->hasMany(SurfLesson::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfLesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'typeclass',
        'description_paragraph_1',
        'description_paragraph_2',
        'description_paragraph_3',
        'image_path',
        'lesson_prices',
        'category_lesson_id',
    ];

    protected $casts = [
        'lesson_prices' => 'array',
    ];

    /**
     * Relasi ke kategori.
     */
    public function categoryLesson()
    {

        return $this->belongsTo(CategoryLesson::class, 'category_lesson_id');
    }
}

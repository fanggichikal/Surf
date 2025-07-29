<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfTrips extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'bodycontent',
        'image',
        'category_island_id',
    ];

    /**
     * Relasi ke kategori pulau (CategoryIsland).
     */
    public function categoryIsland()
    {
        return $this->belongsTo(CategoryIsland::class, 'category_island_id');
    }
}

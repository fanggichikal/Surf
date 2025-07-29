<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryIsland extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relasi ke semua surf trip yang terkait dengan kategori ini.
     */
    public function surfTrips()
    {
        return $this->hasMany(SurfTrips::class, 'category_island_id');
    }
}

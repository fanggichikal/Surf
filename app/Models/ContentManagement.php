<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ContentManagement extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'content_management';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'section_name',
        'title',
        'content_body',
        'image_path',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Hapus gambar terkait saat record dihapus
        static::deleting(function ($content) {
            if ($content->image_path) {
                Storage::disk('public')->delete($content->image_path);
            }
        });
    }
}

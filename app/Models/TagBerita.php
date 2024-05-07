<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagBerita extends Model
{
    use HasFactory;
    protected $table = 'berita_tag';

    protected $fillable = [
        'name',
    ];

    public function tagBerita()
    {
        return $this->hasMany(News::class);
    }

    public function beritas()
    {
        return $this->belongsToMany(News::class, 'berita_tag', 'berita_tag', 'id');
    }
}

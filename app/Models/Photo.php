<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Album;

class Photo extends Model
{
    use HasFactory;
    protected $filable =[
        'title',
        'description',
        'photo',
        'album_id',
        'size'
    ];

    public function Album()
    {
        return $this->belongsTo(Album::class);
    }
}

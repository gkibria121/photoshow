<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Album;
use App\models\User;

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
    /**
     * Get all of the photos for the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    /**
     * The roles that belong to the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

}

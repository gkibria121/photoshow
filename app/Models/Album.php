<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Photo;
use App\models\User;

class Album extends Model
{
    use HasFactory;

    protected $filable =[
        'name',
        'description',
        'cover_image'
    ];
    public function Photos()
    {
        return $this->hasMany(Photo::class);


    }
    /**
     * Get the user that owns the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Photo;

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
}

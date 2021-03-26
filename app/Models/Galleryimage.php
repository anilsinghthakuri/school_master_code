<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryimage extends Model
{
    use HasFactory;

    protected $table = 'galleryimages';
    protected $primaryKey = 'gallery_image_id';

    protected $fillable = ['gallery_album_id','gallery_image_name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    use HasFactory;

    protected $table = 'gallery_albums';
    protected $primaryKey = 'gallery_album_id';
    protected $fillable = ['gallery_album_name'];

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;
}

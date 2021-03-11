<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeCategory extends Model
{
    use HasFactory;

    protected $table = 'notice_categories';
    protected $primaryKey = 'notice_category_id';

    protected $fillable = ['notice_category_name'];
}

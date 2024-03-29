<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeType extends Model
{
    use HasFactory;

    protected $table = 'notice_types';
    protected $primaryKey = 'notice_type_id';
}

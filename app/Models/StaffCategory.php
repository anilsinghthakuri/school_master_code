<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffCategory extends Model
{
    use HasFactory;

    protected $table = 'staff_categories';
    protected $primaryKey  = 'staff_category_id';

    protected $fillable = ['staff_category_name'];
}

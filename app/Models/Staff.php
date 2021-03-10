<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $primaryKey = 'staff_id';

    // protected $fillable = ['staff']

    public function staffcategory()
    {
        return $this->belongsTo(StaffCategory::class,'staff_category_id','staff_category_id');
    }
}

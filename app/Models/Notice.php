<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notices';
    protected $primaryKey = 'notice_id';

    //for show the name using relation
    public function noticecategory()
    {
        return $this->belongsTo(NoticeCategory::class,'notice_category_id','notice_category_id');
    }

    //for showing type name using relation
    public function noticetype()
    {
        return $this->belongsTo(NoticeType::class,'notice_type_id','notice_type_id');
    }
}

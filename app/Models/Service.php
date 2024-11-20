<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    public $timestamps = false;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUSES = [
        self::STATUS_INACTIVE => 'Inactive',
        self::STATUS_ACTIVE => 'Active',
    ];

    const DELETED_NO = 0;
    const DELETED_YES = 1;
    const DELETEDS = [
        self::DELETED_NO => 'No',
        self::DELETED_YES => 'Yes',
    ];


    protected $fillable = [
        'business_type_id',
        'service_category_id',
        'name',
        'slug',
        'short_description',
        'long_description',
        'image',
        'status',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'deleted',
        'deleted_at',
        'deleted_by'
    ];

    public function getShowImageAttribute()
    {
        if ($this->image != null && $this->image != '') {
            return asset($this->image);
        }
        return asset('assets/backend/images/placeholder.jpg');
    }
    
    public function business_type(){
        return $this->belongsTo(BusinessType::class);
    }

    public function service_category(){
        return $this->belongsTo(ServiceCategory::class);
    }

    public function service_images(){
        return $this->hasMany(ServiceImage::class)
            ->where('deleted', ServiceImage::DELETED_NO)
            ->where('status', ServiceImage::STATUS_ACTIVE);
    }
}

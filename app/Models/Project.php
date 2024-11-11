<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
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
        'project_category_id',
        'name',
        'slug',
        'client',
        'project_date',
        'team_members',
        'location',
        'details',
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

    public function business_type(){
        return $this->belongsTo(BusinessType::class);
    }

    public function project_category(){
        return $this->belongsTo(ServiceCategory::class);
    }
}

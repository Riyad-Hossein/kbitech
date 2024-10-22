<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    public $timestamps = false;

    const TYPE_ADMIN = 0;
    const TYPE_USER = 1;
    const TYPES = [
        self::TYPE_ADMIN => 'Admin',
        self::TYPE_USER => 'User',
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
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

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_OTHER = 2;
    const GENDERS = [
        self::GENDER_MALE => 'Male',
        self::GENDER_FEMALE => 'Female',
        self::GENDER_OTHER => 'Other'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'username',
        'user_type',
        'gender',
        'religion',
        'profile_img',
        'address',
        'email_verified_at',
        'password',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];

    public function getShowImageAttribute()
    {
        if ($this->profile_img != null && $this->profile_img != '') {
            return asset($this->profile_img);
        }
        return asset('assets/images/user.png');
    }
}

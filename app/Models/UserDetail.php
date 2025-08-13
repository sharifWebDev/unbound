<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'date_of_birth',
        'nationality',
        'emergency_name',
        'emergency_relation',
        'emergency_phone',
        'emergency_email',
        'preferred_language',
        'dietary_restrictions',
        'special_requests',
        'country_id',
        'city_id',
        'area_id',
        'description',
        'designation',
        'email_notifications',
        'marketing_updates',
        'joined_at',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joined_at' => 'datetime',
        'email_notifications' => 'boolean',
        'marketing_updates' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}

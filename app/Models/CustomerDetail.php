<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id',
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
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'email_notifications' => 'boolean',
        'marketing_updates' => 'boolean',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

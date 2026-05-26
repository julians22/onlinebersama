<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyConsent extends Model
{
    protected $fillable = [
        'uuid',
        'status',
        'ip_address',
        'accepted_at',
        'created_at',
    ];

    public $table = 'tos_actions';

    public $timestamps = false;

    protected $casts = [
        'accepted_at' => 'datetime',
        'created_at' => 'datetime',
        'status' => 'boolean',
    ];

    // created_at must be generated when creating a new record
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = now();
        });
    }
}

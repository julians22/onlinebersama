<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TosAction extends Model
{

    protected $fillable = ['uuid', 'status', 'ip_address', 'accepted_at'];

    // scopeAccept
    public function scopeAccepted($query)
    {
        return $query->where('status', 1);
    }

    // scopeReject
    public function scopeRejected($query)
    {
        return $query->where('status', 0);
    }

}

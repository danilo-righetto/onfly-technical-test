<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelRequest extends Model
{
    /** @use HasFactory<\Database\Factories\TravelRequestFactory> */
    use HasFactory;

    protected $table = 'onfly_travel_request';

    protected $fillable = [
        'order_id',
        'user_id',
        'name_applicant',
        'origin',
        'destination',
        'departure_date',
        'return_date',
        'status'
    ];

    protected $casts = [
        'user_id'          => 'integer',
        'order_id'         => 'string',
        'name_applicant'   => 'string',
        'origin'           => 'string',
        'destination'      => 'string',
        'departure_date'   => 'datetime',
        'return_date'      => 'datetime',
        'status'           => 'string'
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}

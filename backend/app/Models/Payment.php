<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'amount',
        'user_id'
    ];

    protected $attributes = [
        'id',
        'amount',
        'user_id',
        'created_at',
        'updated_at'
    ];

    /**
     * @return BelongsTo
     */
    public function userWhoPaid(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class, 'payment_id', 'id');
    }
}

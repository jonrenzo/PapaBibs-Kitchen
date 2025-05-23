<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'special_instruction',
        'courier',
        'payment_method',
        'card_number',
        'card_expiry',
        'card_cvc',
        'total',
        'status_id',
        'tracking_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->tracking_token)) {
                $order->tracking_token = Str::random(32);
            }
        });
    }
    public function generateTrackingToken()
    {
        if (empty($this->tracking_token)) {
            $this->tracking_token = Str::random(32);
            $this->save();
        }
        return $this->tracking_token;
    }

}

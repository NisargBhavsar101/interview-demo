<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table ="Booking";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'paid_amount',
        'total_amount',
        'discount_amount',
    ];
/**
     *  @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = User::get('id') ?? null;
        });
    }

    public function user()
    {
        return $this->hasMany(User::class,'id');
    }
}


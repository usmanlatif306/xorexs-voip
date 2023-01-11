<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'uuid', 'user_id', 'package_id', 'did_id', 'city', 'price', 'status', 'paid_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'paid_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function did()
    {
        return $this->belongsTo(Did::class);
    }

    public function billdetail()
    {
        return $this->hasOne(BillDetail::class);
    }

    public function prisonerdetail()
    {
        return $this->hasOne(PrisonerDetail::class);
    }
}

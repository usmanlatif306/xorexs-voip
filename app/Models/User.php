<?php

namespace App\Models;

use App\Enums\Roles;
use App\Models\Voxucm\VoxUserDetail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

// implements MustVerifyEmail
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at', 'phone_verified_at', 'phone', 'google_id', 'facebook_id', 'role_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getGravatarAttribute()
    {
        return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email)));
    }

    public function isAdmin(): bool
    {
        return auth()->user()->role_id === Roles::ADMIN || auth()->user()->role_id === Roles::ADMIN->value;
    }

    public function isUser(): bool
    {
        return auth()->user()->role_id === Roles::USER | auth()->user()->role_id === Roles::USER->value;
    }

    // User Details
    public function user_details()
    {
        return $this->hasOne(UserDetail::class);
    }

    // Voxucm User Details
    public function vox_user()
    {
        return $this->hasOne(VoxUserDetail::class);
    }


    // User orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // User relation with purchases Numbers
    public function numbers()
    {
        // return $this->hasMany(Purchase::class);
        return $this->hasMany(Order::class)->whereNotNull('did_id');
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new PasswordReset($token));
    // }
    // public function sendVerificationEmail($token)
    // {
    //     $this->notify(new VerifyEmailNotification($token));
    // }
}

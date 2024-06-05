<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Clients extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'created_at',
        'updated_at',
        'img_link'
    ];

}
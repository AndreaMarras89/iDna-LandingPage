<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Email_Info extends Authenticatable
{
    use HasFactory, Notifiable;

    const CREATED_AT = 'creation_date';
	const UPDATED_AT = 'last_modify_date';
    protected $table = 'email_info';
	protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'birthplace',
        'birthday',
        'message'
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

}
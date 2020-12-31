<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'contact_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class,
            'contact_users', 'user_id',
            'contact_id');
    }
}

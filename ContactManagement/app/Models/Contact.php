<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'telephone', 'category', 'avatar', 'comment', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

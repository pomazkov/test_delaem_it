<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';
    protected $casts = ['date' => 'datetime:d/m/Y'];
    protected $fillable = ['name','surname', 'email','birth', 'message'];

    public function setBirthAttribute($value)
    {
        $this->attributes['birth'] = date('Y-m-d', strtotime($value));
    }
}

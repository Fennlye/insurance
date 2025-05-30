<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'phone', 'email', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

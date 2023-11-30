<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitacion extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function recepcionista()
{
    return $this->hasOne(Recepcionista::class);
}
}

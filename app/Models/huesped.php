<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class huesped extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}

    public function habitacion()
{
    return $this->belongsTo(Habitacion::class);
}

    public function recepcionista()
{
    return $this->belongsTo(Recepcionista::class);
}
}

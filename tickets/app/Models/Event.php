<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'fecha', 'entrada', 'ubicacion'];
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
};

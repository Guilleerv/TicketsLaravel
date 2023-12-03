<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente', 'id_evento'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'id_evento');
    }
}

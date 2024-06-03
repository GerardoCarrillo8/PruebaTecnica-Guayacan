<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    use HasFactory;

    // Definir la tabla asociada (opcional si la convención de nombres es seguida)
    protected $table = 'clientes';

    protected $primaryKey = 'idCliente';
    // Definir los campos que se pueden asignar en masa
    protected $fillable = [
        'idCliente',
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
    ];

    // Si usas timestamps (created_at y updated_at) y la tabla no los tiene, desactívalos
    public $timestamps = false;
}

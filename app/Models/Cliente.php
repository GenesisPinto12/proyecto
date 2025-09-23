<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Considerar si necesitas factories
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Si planeas usar factories para pruebas, descomenta la siguiente línea
    // use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'numero_poliza',
        'duracion',
        'status', // Añadir 'status' al fillable
    ];

    // Si necesitas casts para algún atributo, puedes definirlos aquí
    // protected function casts(): array
    // {
    //     return [
    //         'duracion' => 'integer',
    //         'status' => ClienteStatus::class, // Ejemplo si tuvieras un Enum para el status
    //     ];
    // }
}

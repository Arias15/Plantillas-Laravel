<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected  $primaryKey = 'id';
    public $timestamps= false;

    protected  $fillable = [
        'cod_cliente',
        'raz_social',
        'segmento',
        'sub_seg',
        'canal',
        'region',
        'departamento',
        'provincia',
        'ejec_comercial',
        'jefe_comercial',
        'fac_agrupada',
        'tipo_cliente'
    ];

    protected  $guarded =[

    ];
}

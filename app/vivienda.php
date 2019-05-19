<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    //
    protected $table = 'viviendas';
    protected $primaryKey = 'id';
    protected $fillable = [ 'cc', 'manz', 'lado', 'codigo', 'calle', 'catast', 'manz_int', 'edifi_mono', 'entrada_esca', 'piso', 'casa_lote', 'dpto_hab', 'tipo_viv',   'descripcion', 'viv_ant', 'viv_post' ];
    public $timestamps = true;

    public function dato()
    {
        return $this->belongsTo('App\dato');
    }
  
}

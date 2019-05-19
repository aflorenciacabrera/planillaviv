<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dato extends Model
{
    //
    protected $table = 'datos';
    protected $primaryKey = 'id';
    protected $fillable = [ 'provincia', 'aglomerado' ,'departamento', 'localidad', 'ups', 'area', 'gr_actual', 'fecha_campo', 'estado',  'fraccion', 'radio', 'codigo_listador', 'apeynom_listador', 'fecha_campo_li', 'sub_campo', 'codigo_sub_lis', 'apeynom_sub_lis', 'fecha_campo_sub', 'codigo_ingresador', 'apeynom_ingresador', 'fecha_ingreso', 'sub_ingresador', 'codigo_sub_ing', 'apeynom_sub_ing', 'fecha_ingreso_', ];
    public $timestamps = true;

    public function viviendas()
    {
        return $this->hasMany('App\vivienda');
    }
}

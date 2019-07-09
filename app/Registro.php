<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    //protected $table = 'registros';
    protected $fillable = ['Documento','numero','fecha','perfecionado','observacion','gestion',];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $fillable = [
        'data_checkup', 'peso', 'altura','pressao','glicose','colesterol_LDL','colesterol_HDL','observacoes',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

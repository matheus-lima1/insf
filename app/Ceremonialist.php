<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceremonialist extends Model
{

    protected $fillable = ['name', 'cpf','email','password','cep','neighborhood','street','number','complement','acting','birth_date','phone'];

    public function ceremonies(){
        return $this->belongsToMany(Ceremony::class,'ceremonialists_ceremonies');
    }
}

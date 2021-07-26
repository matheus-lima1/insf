<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceremonialist extends Model
{

    protected $fillable = ['name', 'cpf','email','password','cep','neightborhood','street','number','complement','acting','dateBirth','phone'];

    public function ceremonies(){
        return $this->belongsToMany(Ceremony::class,'ceremonialists_ceremonies');
    }
}

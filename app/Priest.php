<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priest extends Model
{
    protected $fillable = ['name','cpf','email','password','graduationYear','instituition'];

    public function ceremonies(){

        return $this->belongsTo(Ceremony::class);

    }
}

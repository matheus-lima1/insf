<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ceremony extends Model
{

    protected $fillable = ['date','time','tithe','priest_id'];

    public function priest(){
        return $this->hasMany(Priest::class);
    }

    public function ceremonialists(){
        return $this->belongsToMany(Ceremonialist::class,'ceremonialists_ceremonies');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loyal extends Model
{
    protected $fillable = ['name', 'cpf','email','password','cep','neighborhood','street','number','complement','sex','birth_date','major','phone','tithe'];
}

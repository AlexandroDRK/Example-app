<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    //Permite  que o s seguintes atributos possam ser persistidos via metodos:
    protected $fillable = ['name', 'email','adress','logo'];
}
